<?php

namespace App\Http\Controllers\Gasto;

use DateTime;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\LogsController;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Proveedores\Proveedor;
use App\Models\Proyecto\Proyecto;
use App\Models\Gasto\Gasto;
use App\Models\Empresa\Empresa;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Clientes\Cliente\ClienteRequest as ClienteRequest;
use App\Http\Requests\Clientes\Cliente\ClienteContactoDireccionRequest as ClienteContactoDireccionRequest;

/**
 * @group Gasto
 * APIs para Gastos
 */
class GastoController extends Controller
{
    /**
     * Retornar Gastos
     *
     * Retorna todos los gastos
     *
     *
     * @response {
     *      "data" : [
     *          {
     *              "id_gas": 0,
     *              "gas_fec": "date",
     *              "gas_fac": "string",
     *              "gas_subtot": "float",
     *              "gas_igv": "float",
     *              "gas_tot": "float",
     *              "id_prov": 0,
     *              "prov_razsoc":"string",
     *              "prov_ruc":"char",
     *              "id_proy":0,
     *              "nom_proy":"string",
     *              "gas_mon":"char",
     *              "gas_tipcam":"float",
     *              "gas_totdol":"float",
     *              "gas_desc":"string",
     *              "est_reg": "string"
     *          }
     *      ],
     *      "size":0
     * }
     */
    public function get()
    {
        try {
            $cotizaciones = DB::table('gasto')
                                    ->select(
                                        'id_gas',
                                        'gas_fec',
                                        'gas_fac',
                                        'gas_subtot',
                                        'gas_igv',
                                        'gas_tot',
                                        'id_prov',
                                        'prov_razsoc',
                                        'prov_ruc',
                                        'gasto.id_proy',
                                        'nom_proy',
                                        'gas_mon',
                                        'gas_tipcam',
                                        'gas_totdol',
                                        'gas_desc',
                                        'gasto.est_reg')->join('proyecto','proyecto.id_proy','=','gasto.id_proy')
                                        ->orderBy('id_gas', 'desc')->get();
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }

        return response()->json([
            'data' => $cotizaciones,
            'size' => count($cotizaciones)
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    /**
     * Retornar Gasto
     *
     * Retorna Gasto por Id
     *
     * @urlParam  id required El ID del Gasto.
     *
     * @response {
     *      "Gasto": {
     *          "id_gas": 0,
     *          "gas_fec": "date",
     *          "gas_fac": "string",
     *          "gas_subtot": "float",
     *          "gas_igv": "float",
     *          "gas_tot": "float",
     *          "id_prov": 0,
     *          "prov_razsoc": "string",
     *          "prov_ruc": "string",
     *          "id_proy": 0,
     *          "gas_mon": "char",
     *          "gas_tipcam": "float",
     *          "gas_totdol": "float",
     *          "gas_desc": "string"
     *      },    
     *      "logo": "string",
     *      "extension": "string"
     * }
     */
    public function getById($id)
    {
        try {
            $Gasto = DB::table('gasto')
                                    ->select(
                                        'id_gas',
                                        'gas_fec',
                                        'gas_fac',
                                        'gas_subtot',
                                        'gas_igv',
                                        'gas_tot',
                                        'id_prov',
                                        'prov_razsoc',
                                        'prov_ruc',
                                        'gasto.id_proy',
                                        'nom_proy',
                                        'gas_mon',
                                        'gas_tipcam',
                                        'gas_totdol',
                                        'gas_desc',
                                        'gasto.est_reg')->join('proyecto','proyecto.id_proy','=','gasto.id_proy')
                                        ->where('id_gas','=',$id)->get();
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }

        if($Gasto) {
            $empresa = Empresa::find(1);
            $b64_file = null;
            if($empresa && $empresa->img_emp) {
                $b64_file = base64_encode(Storage::disk('local')->get($empresa->img_emp));
                return response()->json([
                    'Gasto' => $Gasto,
                    'logo' => $b64_file,
                    'extension' => $empresa->imgext_emp
                ], 200, [], JSON_NUMERIC_CHECK);
            } else {
                return response()->json([
                    'Gasto' => $Gasto,
                    'logo' => null,
                    'extension' => null
                ], 200, [], JSON_NUMERIC_CHECK);
            }

        } else {
            return response()->json([
                'resp' => 'No se encontro la cotizacion'
            ], 500);
        }
    }

    /**
     * Crear Gasto 
     *
     * Crea Gasto 
     *
     * @bodyParam  gas_fec date Fecha del gasto.
     * @bodyParam  gas_fac string Nro de la factura.
     * @bodyParam  gas_subtot float subtotal en soles del gasto formula total/1.18.
     * @bodyParam  gas_igv float gasto con igv cumple formula subtotal*18%.
     * @bodyParam  gas_tot float gasto total si existe moneda dolar formula tipocambio*totaldolar.
     * @bodyParam  id_prov int Id del proveedor.
     * @bodyParam  prov_razsoc string razon social del proveedor.
     * @bodyParam  prov_ruc string ruc del proveedor.
     * @bodyParam  id_proy int Id del proyecto.
     * @bodyParam  gas_mon char tipo de moneda 0=sol 1=dolar.
     * @bodyParam  gas_tipcam float tipo de cambio de moneda dolar.
     * @bodyParam  gas_totdol float total en dolares
     * @bodyParam  gas_desc string descripcion del gasto
     *
     * @response {
     *    "resp": "Gasto creado"
     * }
     */
    public function create(Request $request)
    {

        DB::beginTransaction();

        try {
            $Gasto = Gasto::create([
                'gas_fec'=>$request->input('gas_fec'),
                'gas_fac'=>$request->input('gas_fac'),
                'gas_subtot'=>$request->input('gas_subtot'),
                'gas_igv'=>$request->input('gas_igv'),
                'gas_tot'=>$request->input('gas_tot'),
                'id_prov'=>$request->input('id_prov'),
                'prov_razsoc'=>$request->input('prov_razsoc'),
                'prov_ruc'=>$request->input('prov_ruc'),
                'id_proy'=>$request->input('id_proy'),
                'gas_mon'=>$request->input('gas_mon'),
                'gas_tipcam'=>$request->input('gas_tipcam'),
                'gas_totdol'=>$request->input('gas_totdol'),
                'gas_desc'=>$request->input('gas_desc'),
                'est_reg' => 'A'
            ]);

            
            DB::commit();
            // all good
        } catch (Exception $e) {

            DB::rollback();
            // something went wrong
            return response()->json([
                        'error' => 'ocurrio un error en el servidor',
                        'desc' => $e
                    ], 500);
        }

        //Logs
        $descripcion = "Se creo el gasto con codigo: ".$Gasto->id_gas;
        //$logs = new LogsController();
        //$logs->create_log($descripcion, 1);
        ///////
        return response()->json([
            'resp' => 'Gasto creada'
        ], 200, [], JSON_NUMERIC_CHECK);

    }

    /**
     * Anular Gasto
     *
     * Anula un Gasto
     *
     * @urlParam  id required El ID del Gasto.
     *
     * @response {
     *    "resp": "Gasto anulado"
     * }
     */
    public function annul($id) {
        try {
            $Gasto = Gasto::find($id);
            $Gasto->fill(array('est_reg' => 'AN'))->save();
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }

        //Logs
        //$descripcion = "Se anulo la cotizacion de cliente con codigo: ".$Gasto->id_gas;
        //$logs = new LogsController();
        //$logs->create_log($descripcion, 4);
        ///////
        return response()->json([
            'resp' => 'Gasto Anulado'
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    /**
     * Modificar Gasto 
     *
     * Modifica un Gasto 
     *
     * @urlParam  id required El ID del Gasto .
     * @bodyParam  gas_fec date Fecha del gasto.
     * @bodyParam  gas_fac string Nro de la factura.
     * @bodyParam  gas_subtot float subtotal en soles del gasto formula total/1.18.
     * @bodyParam  gas_igv float gasto con igv cumple formula subtotal*18%.
     * @bodyParam  gas_tot float gasto total si existe moneda dolar formula tipocambio*totaldolar.
     * @bodyParam  id_prov int Id del proveedor.
     * @bodyParam  prov_razsoc string razon social del proveedor.
     * @bodyParam  prov_ruc string ruc del proveedor.
     * @bodyParam  id_proy int Id del proyecto.
     * @bodyParam  gas_mon char tipo de moneda 0=sol 1=dolar.
     * @bodyParam  gas_tipcam float tipo de cambio de moneda dolar.
     * @bodyParam  gas_totdol float total en dolares
     * @bodyParam  gas_desc string descripcion del gasto
     * @response {
     *    "resp": "Gasto  actualizado"
     * }
     */
    public function update(Request $request,$id){
        try {
            $Gasto = Gasto::find($id);
            $Gasto->fill(array(
                'gas_fec'=>$request->input('gas_fec'),
                'gas_fac'=>$request->input('gas_fac'),
                'gas_subtot'=>$request->input('gas_subtot'),
                'gas_igv'=>$request->input('gas_igv'),
                'gas_tot'=>$request->input('gas_tot'),
                'id_prov'=>$request->input('id_prov'),
                'prov_razsoc'=>$request->input('prov_razsoc'),
                'prov_ruc'=>$request->input('prov_ruc'),
                'id_proy'=>$request->input('id_proy'),
                'gas_mon'=>$request->input('gas_mon'),
                'gas_tipcam'=>$request->input('gas_tipcam'),
                'gas_totdol'=>$request->input('gas_totdol'),
                'gas_desc'=>$request->input('gas_desc'),
                
            ))->save();
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }

        //Logs
       
        ///////
        return response()->json([
            'resp' => 'Gasto Actualizado'
        ], 200, [], JSON_NUMERIC_CHECK);

    }

    

}
