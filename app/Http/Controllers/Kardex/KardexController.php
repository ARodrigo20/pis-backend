<?php

namespace App\Http\Controllers\Kardex;

use DateTime;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\LogsController;

use Mockery\Exception;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Empresa\Empresa;
use App\Models\Kardex\Kardex;
use Illuminate\Support\Facades\Storage;
use App\Models\OrdenCompra\OrdenCompraDet;


/**
 * @group Kardex
 * APIs para kardex
 */
class KardexController extends Controller
{
    
    
    /**
     * Retornar Kardex
     *
     * Retorna todos los productos de ingreso y de salida
     *
     *
     * @response {
     *      "data" : [
     *          {
     *              "id_kar": 0,
     *              "fec_kar": "date",
     *              "cod_kar": "string",
     *              "id_ord_det": 0,
     *              "id_ord_com": 0,
     *              "prod_desc": "string",
     *              "prod_numpar": "string",
     *              "prod_unimed": "char",
     *              "prod_cant": "float",
     *              "prov_razsoc": "string",
     *              "fac_kar": "string",
     *              "guirem_kar": "string",
     *              "bol_kar": "string",
     *              "tip_kar": "char",
     *              "id_col": 0,
     *              "col_usu": "string",
     *              "est_reg": "char"       
     *          }
     *      ],
     *      "size":0
     * }
     */
    
    
    public function get(){
        try {
            $kardex= DB::table('kardex')->where('est_reg', '!=', 'E')->orderBy('id_kar','desc')->get();
            //$kardex = kardex::with([''])->orderBy('id_kar', 'desc')->get();
        } catch (Exception $e){
            return response()->json([
                'error' => 'Ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }
        return  response()->json([
            'data' => $kardex,
            'size' => count($kardex)
        ],200, [], JSON_NUMERIC_CHECK);
    }

    
    /**
     * Crear Kardex
     *
     * Crea un Kardex
     *
     * @bodyParam  kardex_ingreso array required Ejemplo: [{"cod_kar": "String", "id_ord_det":0, "id_ord_com":0, "prod_desc":"string", "prod_numpar":"string", "prod_unimed":"char", "prod_cant":"float", "prov_razsoc":"string", "fac_kar":"string", "guirem_kar":"string", "bol_kar":"string", "tip_kar":"char","id_col":0,"col_usu":"string", "ord_com_det_est":"char", "ord_com_det_feclleg":"date", "ord_com_det_canent":"float", "ord_com_det_canfal":"float"}].
     *
     * @response {
     *    "resp": "Kardex Registrado"
     * }
     */
    public function create(Request $request)
    {
        DB::beginTransaction();

        try {
            $detalles = $request->input('kardex_ingreso');
            if($detalles){
                foreach ($detalles as $detalle){
                    
                    if($detalle['ord_com_det_canent']){
                        $kardex=Kardex::create([
                        
                            'fec_kar' => new DateTime(),
                            'cod_kar' => $detalle['cod_kar'],
                            'id_ord_det' => $detalle['id_ord_det'],
                            'id_ord_com' => $detalle['id_ord_com'],
                            'prod_desc' => $detalle['prod_desc'],
                            'prod_numpar' => $detalle['prod_numpar'],
                            'prod_unimed' => $detalle['prod_unimed'],
                            'prod_cant' => $detalle['prod_cant'],
                            'prov_razsoc' => $detalle['prov_razsoc'],
                            'fac_kar' => $detalle['fac_kar'],
                            'guirem_kar' => $detalle['guirem_kar'],
                            'bol_kar' => $detalle['bol_kar'],
                            'tip_kar' => $detalle['tip_kar'],
                            'id_col' => $detalle['id_col'],
                            'col_usu' => $detalle['col_usu'],
                            'est_reg' => 'A',
                        ]);
                        $updateOrdenCompraDet = OrdenCompraDet::find($detalle['id_ord_det']);
                        $updateOrdenCompraDet->fill(array(
                            'ord_com_det_est' => $detalle['ord_com_det_est'],
                            'ord_com_det_feclleg' => $detalle['ord_com_det_feclleg'],
                            'ord_com_det_canent' => $detalle['ord_com_det_canent'],
                            'ord_com_det_canfal' => $detalle['ord_com_det_canfal'],
                        ))->save();
                    }
                    
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

        //Logs
        //$descripcion = "Se creo registro del kardex "  ;
        //$logs = new LogsController();
        //$logs->create_log($descripcion, 1);
        ///////
        return response()->json([
            'resp' => 'Kardex registrado'
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    
}
