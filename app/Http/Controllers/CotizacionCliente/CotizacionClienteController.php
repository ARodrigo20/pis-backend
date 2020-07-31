<?php

namespace App\Http\Controllers\CotizacionCliente;

use DateTime;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\LogsController;
use Symfony\Component\HttpFoundation\Response;
use App\Models\CotizacionCliente\CotizacionCliente;
use App\Models\CotizacionCliente\CotizacionClienteDetalle;
use App\Models\Empresa\Empresa;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Clientes\Cliente\ClienteRequest as ClienteRequest;
use App\Http\Requests\Clientes\Cliente\ClienteContactoDireccionRequest as ClienteContactoDireccionRequest;

/**
 * @group CotizacionCliente
 * APIs para cotizaciones de clientes
 */
class CotizacionClienteController extends Controller
{   

    public function get()
    {
        try {
            $cotizaciones = DB::table('solicitud_cotizacion_cliente')
                                    ->select(
                                        'solcli_id',
                                        'solcli_cod',
                                        'solcli_fec',
                                        'solcli_proy_nom',
                                        'solcli_cli_nom',
                                        'solcli_cli_dir',
                                        'solcli_cli_con',
                                        'est_reg',)->orderBy('solcli_id', 'desc')->get();
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

    public function getById($id)
    {        
        try {
            $cotizacion = CotizacionCliente::with(['cotizacion_detalle'] )->find($id);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }
        
        if($cotizacion) {
            $empresa = Empresa::find(1);
            $b64_file = null;
            if($empresa && $empresa->img_emp) {
                $b64_file = base64_encode(Storage::disk('local')->get($empresa->img_emp));
                return response()->json([
                    'cotizacion' => $cotizacion,
                    'logo' => $b64_file,
                    'extension' => $empresa->imgext_emp
                ], 200, [], JSON_NUMERIC_CHECK);
            } else {
                return response()->json([
                    'cotizacion' => $cotizacion,
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
     * Crear Cotizacion Cliente
     * 
     * Crea una Cotizacion de cliente
     * 
     * @bodyParam  razsoc_cli string required Razon social del cliente.
     * @bodyParam  numdoc_cli string required Numero de documento del cliente.
     * @bodyParam  ema_cli string Email del cliente.
     * @bodyParam  id_tipodoc int Tipo de documento del cliente.
     * 
     * @response {
     *    "resp": "cotizacion creada"
     * }
     */
    public function create(Request $request)
    {   

        DB::beginTransaction();
        //solcli_cod
        // $date = new DateTime();

        //$max = DB::table('solicitud_cotizacion_cliente')->whereYear('solcli_fec', '=', 2021)->max('solcli_cod');

        //error_log("DATE:: ".$max);

        try {
            $cotizacionCliente = CotizacionCliente::create([
                'solcli_cod' => $this->next_cod(),
                'solcli_fec' => new DateTime(),
                'id_proy' => $request->input('id_proy'),
                'solcli_proy_nom' => $request->input('solcli_proy_nom'),
                'solcli_proy_cod' => $request->input('solcli_proy_cod'),
                'id_cli' => $request->input('id_cli'),
                'solcli_cli_nom' => $request->input('solcli_cli_nom'),
                'solcli_cli_numdoc' => $request->input('solcli_cli_numdoc'),
                'solcli_cli_tipdoc' => $request->input('solcli_cli_tipdoc'),
                'solcli_cli_dir' => $request->input('solcli_cli_dir'),
                'solcli_cli_con' => $request->input('solcli_cli_con'),
                'id_col' => $request->input('id_col'),
                'solcli_col_nom' => $request->input('solcli_col_nom'),
                'est_reg' => 'A'
            ]);

            $detalles = $request->input('cotizacion_detalle');
                
            if($detalles) {
                foreach($detalles as $detalle) {
                    $cotizacionDetalle = CotizacionClienteDetalle::create([
                        'solcli_id' => $cotizacionCliente->solcli_id,
                        'solclidet_prod_serv' => $detalle['solclidet_prod_serv'],
                        'solclidet_des' => $detalle['solclidet_des'],
                        'id_prod' => $detalle['id_prod'],
                        'solclidet_prod_can' => $detalle['solclidet_prod_can'],
                        'solclidet_prod_codint' => $detalle['solclidet_prod_codint'],
                        'solclidet_prod_numpar' => $detalle['solclidet_prod_numpar'],
                        'solclidet_prod_fabr' => $detalle['solclidet_prod_fabr'],
                        'solclidet_prod_marc' => $detalle['solclidet_prod_marc'],
                        'solclidet_prod_unimed' => $detalle['solclidet_prod_unimed'],
                        'solclidet_prod_stock' => $detalle['solclidet_prod_stock']
                    ]);
                }
            }
                
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

        // //Logs
        // $descripcion = "Se creo el cliente con ID: ".$cliente->id_cli;
        // $logs = new LogsController();
        // $logs->create_log($descripcion, 1);
        // ///////
        return response()->json([
            'resp' => 'Cotizacion creada'
        ], 200, [], JSON_NUMERIC_CHECK);

    }

    public function annul($id) {
        try {
            $cotizacion = CotizacionCliente::find($id);
            $cotizacion->fill(array('est_reg' => 'AN'))->save();
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }

        // //Logs
        // $descripcion = "Se elimino el usuario con ID: ".$user->id_col;
        // $logs = new LogsController();
        // $logs->create_log($descripcion, 3);
        // ///////
        return response()->json([
            'resp' => 'Cotizacion Anulada'
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    public function next_cod()
    {
        $cod_cotizacion_max = DB::table('solicitud_cotizacion_cliente')->whereYear('solcli_fec', '=', date("Y"))->max('solcli_cod');
        if($cod_cotizacion_max == null) $cod_cotizacion_max = "#0001-NTWC-".date("Y");
        else {
            $numberStr = substr($cod_cotizacion_max,1,5);
            $max = intval($numberStr) + 1;
            $cod_cotizacion_max = "#".sprintf("%'.04d", $max)."-NTWC-".date("Y");
        }
        return $cod_cotizacion_max;
    }

}