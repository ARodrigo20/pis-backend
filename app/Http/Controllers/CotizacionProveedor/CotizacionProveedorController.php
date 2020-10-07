<?php

namespace App\Http\Controllers\CotizacionProveedor;

use DateTime;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\LogsController;
use Mockery\Exception;
use Symfony\Component\HttpFoundation\Response;
use App\Models\CotizacionProveedor\CotizacionProveedor;
use App\Models\CotizacionProveedor\CotizacionProveedorDetalle;
use App\Models\Empresa\Empresa;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Proveedores\Proveedor\ProveedorRequest as ProveedorRequest;
use App\Http\Requests\Proveedores\Proveedor\ProveedorColaboradorRequest as ProveedorColaboradorRequest;
use App\Http\Requests\Proveedores\Proveedor\ProveedorBancoRequest as ProveedorBancoRequest;
use App\Http\Requests\Proveedores\Proveedor\ProveedorDireccionRequest as ProveedorDireccionRequest;

/**
 * @group CotizacionProveedor
 * APIs para cotizaciones de proveedores
 */
class CotizacionProveedorController extends Controller
{
    
    /**
     * Retornar cotizaciones
     *
     * Retorna todos las cotizaciones activas y anuladas
     *
     *
     * @response {
     *      "data" : [
     *          {
     *              "cotprov_id": 0,
     *              "solcli_id": 0,
     *              "id_proy": 0,
     *              "id_cli": 0,
     *              "id_prov": 0,
     *              "cotprov_fec": "date",
     *              "cotprov_razsoc": "string",
     *              "cotprov_ruc": "char",
     *              "cotprov_tipdoc": "char",
     *              "cotprov_dir": "string",
     *              "cotprov_con": "string",
     *              "cotprov_ema": "string",
     *              "estado": "char",
     *              "estado_envio": "char",
     *              "proyecto":{
     *                  "id_proy": 0,
     *                  "nom_proy":"string",
     *                  "ser_proy": "string",
     *                  "num_proy": 0,
     *                  "id_cli": 0,
     *                  "est_reg": "A"
     *              },
     *              "cotizacion_cliente":{
     *                  "solcli_id": 0,
     *                  "solcli_cod": "string"
     *              }
     *          }
     *      ],
     *      "size":0
     * }
     */
    
    
    public function get(){
        try {
            $cotizacionesProveedor = CotizacionProveedor::with(['proyecto','cotizacionCliente'])->orderBy('solcli_id', 'desc')->get();
        } catch (Exception $e){
            return response()->json([
                'error' => 'Ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }
        return  response()->json([
            'data' => $cotizacionesProveedor,
            'size' => count($cotizacionesProveedor)
        ],200, [], JSON_NUMERIC_CHECK);
    }

    /**
     * Retornar cotizacion del proveedor
     *
     * Retorna cotizacion del proveedor por medio de su Id
     *
     * @urlParam  id required El ID de la cotizacion del proveedor.
     *
     * @response {
     *      "cotizacion" :
     *          {
     *              "cotprov_id": 0,
     *              "solcli_id": 0,
     *              "id_proy": 0,
     *              "id_cli": 0,
     *              "id_prov": 0,
     *              "cotprov_fec": "date",
     *              "cotprov_razsoc": "string",
     *              "cotprov_ruc": "char",
     *              "cotprov_tipdoc": "char",
     *              "cotprov_dir": "string",
     *              "cotprov_con": "string",
     *              "cotprov_ema": "string",
     *              "estado": "char",
     *              "estado_envio": "char",
     *              "proyecto":{
     *                  "id_proy":0,
     *                  "nom_proy":"string",
     *                  "ser_proy": "NTWC-P-",
     *                  "num_proy": 0,
     *                  "id_cli": 0,
     *                  "est_reg": "A",
     *                  "cliente": {}
     *               },
     *              "cotizacion_proveedor_detalle": [{
     *                  "cotprovdet_id": 0,
     *                  "cotprovdet_cant": "string",
     *                  "cotprovdet_desc": "string",
     *                  "cotprov_id": 0,
     *                  "id_prod": 0
     *              }]
     *          },
     *      "size":0
     * }
     */

    public function getById($id)
    {
        try {
            $cotizacionProveedor = CotizacionProveedor::with(['cotizacion_detalle'] )->find($id);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }

        if($cotizacionProveedor) {
            $empresa = Empresa::find(1);
            $b64_file = null;
            if($empresa && $empresa->img_emp) {
                $b64_file = base64_encode(Storage::disk('local')->get($empresa->img_emp));
                return response()->json([
                    'cotizacion' => $cotizacionProveedor,
                    'logo' => $b64_file,
                    'extension' => $empresa->imgext_emp
                ], 200, [], JSON_NUMERIC_CHECK);
            } else {
                return response()->json([
                    'cotizacion' => $cotizacionProveedor,
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
     * Crear Cotizacion Proveedor
     *
     * Crea una Cotizacion de Proveedor
     *
     * @bodyParam  solcli_id int required Id de la solicitud de cotizacion del cliente.
     * @bodyParam  id_proy int required Id del proyecto.
     * @bodyParam  id_cli int required Id del cliente.
     * @bodyParam  id_prov int required Id del proveedor.
     * @bodyParam  cotprov_fec date fecha de emision de la cotizacion del Proveedor.
     * @bodyParam  cotprov_razsoc string razon social del Proveedor.
     * @bodyParam  cotprov_ruc char numero ruc de la empresa a quien se realiza la cotizacion.
     * @bodyParam  cotprov_tipdoc char Tipo de documento de quien se realiza el pedido.
     * @bodyParam  cotprov_dir string Direccion del Proveedor.
     * @bodyParam  cotprov_con string Contacto del Proveedor.
     * @bodyParam  cotprov_ema string Email del contacto a quien se enviara.
     * @bodyParam  estado string estado del registro.
     * @bodyParam  estado_envio estado del envio a email del contacto.
     * @bodyParam  cotizacion_proveedor_detalle array required Ejemplo: [{"cotprov_id": 0,"cotprovdet_cant":"int","id_prod":"int","cotprovdet_des":char}]
     *
     * @response {
     *    "resp": "cotizacion Proveedor creada"
     * }
     */
    public function create(Request $request)
    {
        DB::beginTransaction();

        try {
            $cotizacionProveedor = CotizacionProveedor::create([
                'solcli_id' => $request->input('solcli_id'),
                'id_proy' => $request->input('id_proy'),
                'id_cli' => $request->input('id_cli'),
                'id_prov' => $request->input('id_prov'),
                'cotprov_fec' => $request->input('cotprov_fec'),
                'cotprov_razsoc' => $request->input('cotprov_razsoc'),
                'cotprov_ruc' => $request->input('cotprov_ruc'),
                'cotprov_tipdoc' => $request->input('cotprov_tipdoc'),
                'cotprov_dir' => $request->input('cotprov_dir'),
                'cotprov_con' => $request->input('cotprov_con'),
                'cotprov_ema' => $request->input('cotprov_ema'),
                'estado' => 'A',
                'estado_envio' => '0',
            ]);

            $detalles = $request->input('cotizacion_detalle');

            if($detalles) {
                foreach ($detalles as $detalle){
                    $cotizacionProveedorDetalle = CotizacionProveedorDetalle::create([
                        'cotprovdet_cant' => $detalle['cotprov_det_cant'],
                        'cotprovdet_desc' => $detalle['cotprov_det_desc'],
                        'cotprov_id' => $cotizacionProveedor->cotprov_id,
                        'id_prod' => $detalle['id_prod'],
                    ]);
                }
            }
            DB::commit();
            //all good
        }catch (Exception $e){
            DB::rollBack();
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }
        return response()->json([
            'resp' => 'Cotizacion creada'
        ], 200, [], JSON_NUMERIC_CHECK);
    }
    /**
     * Anular cotizacion del Proveedor
     *
     * Anula una cotizacion
     *
     * @urlParam  id required El ID de la cotizacion del proveedor.
     *
     * @response {
     *    "resp": "Cotizacion anulada"
     * }
     */

    public function annul($id) {
        try {
            $cotizacionProveedor = CotizacionProveedor::find($id);
            $cotizacionProveedor->fill(array('estado' => 'AN'))->save();
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }

        return response()->json([
            'resp' => 'Cotizacion del Proveedor Anulada'
        ], 200, [], JSON_NUMERIC_CHECK);
    }


/*
    public function next_cod()
    {
        $cod_cotizacion_max = DB::table('cotizacion_proveedor')->whereYear('cotprov_fec', '=', date("Y"))->max('solcli_id');
        if($cod_cotizacion_max == null) $cod_cotizacion_max = "#0001-NTWC-".date("Y");
        else {
            $numberStr = substr($cod_cotizacion_max,1,5);
            $max = intval($numberStr) + 1;
            $cod_cotizacion_max = "#".sprintf("%'.04d", $max)."-NTWC-".date("Y");
        }
        return $cod_cotizacion_max;
    }
*/

}