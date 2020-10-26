<?php

namespace App\Http\Controllers\OrdenCompra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\OrdenCompra\OrdenCompra;
use App\Models\OrdenCompra\OrdenCompraDet;
use DateTime;

/**
 * @group OrdenDeCompra
 * APIs para orden de compra
 */

class OrdenCompraController extends Controller
{

    /**
     * Retornar orden de compra
     *
     * Retorna orden de compra por medio de su Id
     *
     * @urlParam  id required El ID de la orden de compra.
     *
     * @response {
     *              "id_ord_com": 0,
     *              "ord_com_cod": "string",
     *              "cotprov_id": 0,
     *              "id_emp": 1,
     *              "ord_com_fec": "Date",
     *              "id_col": 0,
     *              "ord_com_bas_imp": 0,
     *              "ord_com_igv": 0,
     *              "ord_com_tot": 0,
     *              "id_pro": 0,
     *              "est_env": 0,
     *              "est_reg": "string",
     *              "orden_detalle": [
     *                  {
     *                      "id_ord_det": 0,
     *                      "id_ord_com": 0,
     *                      "id_prod": 0,
     *                      "ord_com_det_numpar": "string",
     *                      "ord_com_det_fab": "string",
     *                      "ord_com_det_des": "string",
     *                      "ord_com_det_can": 0,
     *                      "ord_com_det_unimed": "string",
     *                      "ord_com_det_preuni": 0,
     *                      "ord_com_det_est": "string",
     *                      "ord_com_det_feclleg": "Date",
     *                      "ord_com_det_canent": 0,
     *                      "ord_com_det_canfal": 0
     *                  }
     *              ]
     *          }
     */
    public function getById($id)
    {
        try {
            $orden_compra = OrdenCompra::with(['orden_detalle'])->find($id);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e,
            ], 500);
        }

        if ($orden_compra) {
            return response()->json($orden_compra, 200, [], JSON_NUMERIC_CHECK);
        } else {
            return response()->json([
                'resp' => 'No se encontro la orden de compra',
            ], 500);
        }
    }



    /**
     * Crear Orden de Compra
     *
     * Crea una orden de compra
     *
     * @bodyParam cotprov_id int Id de la cotizacion de proveedor.
     * @bodyParam id_col int Id del colaborador.
     * @bodyParam ord_com_bas_imp float Base imponible.
     * @bodyParam ord_com_igv float IGV, 18% de la base imponible.
     * @bodyParam ord_com_tot float Total, suma de base imponible y el igv.
     * @bodyParam id_pro int Id de la proforma de cliente.
     * @bodyParam orden_detalle array required Ejemplo: [{"id_prod": 0,"ord_com_det_numpar": "string", "ord_com_det_fab": "string","ord_com_det_des": "string","ord_com_det_can": 0,"ord_com_det_unimed": "string","ord_com_det_preuni": 0, "ord_com_det_est":"string", "ord_com_det_feclleg": "2020-25-10", "ord_com_det_canent": 0,"ord_com_det_canfal": 0}]
     * 
     * @response {
     *    "resp": "orden de compra creada"
     * }
     */
    public function create(Request $request)
    {
        DB::beginTransaction();

        try {
            $ordenCompra = OrdenCompra::create([
                'ord_com_cod' => $this->next_cod(),
                'cotprov_id' => $request->input('cotprov_id'),
                'id_emp' => 1,
                'ord_com_fec' => new DateTime(),
                'id_col' => $request->input('id_col'),
                'ord_com_bas_imp' => $request->input('ord_com_bas_imp'),
                'ord_com_igv' => $request->input('ord_com_igv'),
                'ord_com_tot' => $request->input('ord_com_tot'),
                'id_pro' => $request->input('id_pro'),
                'est_env' => '0',
                'est_reg' => 'A',
            ]);

            $detalles = $request->input('orden_detalle');

            if($detalles) {
                foreach($detalles as $detalle) {
                    $proformaClientedet = OrdenCompraDet::create([
                        'id_ord_com' => $ordenCompra->id_ord_com,
                        'id_prod' => $detalle['id_prod'],
                        'ord_com_det_numpar' => $detalle['ord_com_det_numpar'],
                        'ord_com_det_fab' => $detalle['ord_com_det_fab'],
                        'ord_com_det_des' => $detalle['ord_com_det_des'],
                        'ord_com_det_can' => $detalle['ord_com_det_can'],
                        'ord_com_det_unimed' => $detalle['ord_com_det_unimed'],
                        'ord_com_det_preuni' => $detalle['ord_com_det_preuni'],
                        'ord_com_det_est' => $detalle['ord_com_det_est'],
                        'ord_com_det_feclleg' => $detalle['ord_com_det_feclleg'],
                        'ord_com_det_canent' => $detalle['ord_com_det_canent'],
                        'ord_com_det_canfal' => $detalle['ord_com_det_canfal']
                    ]);
                }
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e,
            ], 500);
        }
        return response()->json([
            'resp' => 'Orden de compra creada',
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    public function next_cod()
    {
        $cod_orden_compra_max = DB::table('orden_compra')->whereYear('ord_com_fec', '=', date("Y"))->max('ord_com_cod');
        if($cod_orden_compra_max == null) $cod_orden_compra_max = "0001-NTWC-".date("Y");
        else {
            $numberStr = substr($cod_orden_compra_max,0,4);
            $max = intval($numberStr) + 1;
            $cod_orden_compra_max = sprintf("%'.04d", $max)."-NTWC-".date("Y");
        }
        return $cod_orden_compra_max;
    }

}
