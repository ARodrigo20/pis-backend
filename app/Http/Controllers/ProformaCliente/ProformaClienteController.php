<?php

namespace App\Http\Controllers\ProformaCliente;

// use App\ProformaCliente;
use App\Http\Controllers\Controller;
use App\Models\ProformaCliente\ProformaCliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

/**
 * @group ProforomaCliente
 * APIs para proformacliente
 */


class ProformaClienteController extends Controller
{

    /**
     * Retornar proformas cliente
     *
     * Retorna todos las proformas cliente activas y anuladas
     *
     * @urlParam  
     *
     * @response {
     *      "data" :
     *          {
     * @bodyParam  "id_pro":int
     * @bodyParam  "id_cli": int,
     * @bodyParam  "prof_mon": int,
     * @bodyParam  "id_proy": int,
     * @bodyParam  "id_col": int,
     * @bodyParam  "solcli_id": int,
     * @bodyParam  "prof_cre": 1-2-3,
     * @bodyParam  "prof_imp_ini": float,
     * @bodyParam  "prof_int": float,
     * @bodyParam  "prof_cuo": int,
     * @bodyParam  "prof_val": char,
     * @bodyParam  "prof_tie_ent": char,
     * @bodyParam  "prof_cos_dir": float,
     * @bodyParam  "prof_gas_ind": float,
     * @bodyParam  "prof_uti": float,
     * @bodyParam  "prof_bas_imp": float,
     * @bodyParam  "prof_igv": float,
     * @bodyParam  "prof_neto": float,
     * @bodyParam  "prof_fac": float,
     * @bodyParam  "prof_finan": float,
     * @bodyParam  "prof_val_cuo": float,
     *              "proyecto":{
     *                  "id_proy":0,
     *                  "nom_proy":"string",
     *                  "ser_proy": "NTWC-P-",
     *                  "num_proy": 0,
     *                  "id_cli": 0,
     *                  "est_reg": "A",
     *                  "cliente": {}
     *               },
     *              "proforma_cliente_detalles": [{
                        * "id_prof_det": int,
                        * "id_pro": int,
                        * "id_prod": int,
                        * "prof_det_can": int,
                        * "prof_det_pre_lis": float,
                        * "prof_det_imp": float,
                        * "prof_det_cos": float,
                        * "prof_det_tcos": float,
                        * "prof_det_com": float,
                        * "id_prov": int,
                        * "prof_prod_serv": int,
                        * "prof_des_prod": char,
                        * "prof_can_prod": float
     *              }]
     *          },
     *      "size":0
     *  }
     */
    public function get()
    {

        try {
            $proforma_cabecera = ProformaCliente::with(['proyecto', 'cliente', 'proformaClienteDetalles'])->get();
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Ocurrio un error en el servidor',
                'desc' => $e,
            ], 500);
        }
        return response()->json([
            'data' => $proforma_cabecera,
            'size' => count($proforma_cabecera),
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    /**
     * Crear Proforma Cliente
     *
     * Crea una proforma cliente
     *
     * @bodyParam  "id_cli": int,
     * @bodyParam  "prof_mon": int,
     * @bodyParam  "id_proy": int,
     * @bodyParam  "id_col": int,
     * @bodyParam  "solcli_id": int,
     * @bodyParam  "prof_cre": 1-2-3,
     * @bodyParam  "prof_imp_ini": float,
     * @bodyParam  "prof_int": float,
     * @bodyParam  "prof_cuo": int,
     * @bodyParam  "prof_val": char,
     * @bodyParam  "prof_tie_ent": char,
     * @bodyParam  "prof_cos_dir": float,
     * @bodyParam  "prof_gas_ind": float,
     * @bodyParam  "prof_uti": float,
     * @bodyParam  "prof_bas_imp": float,
     * @bodyParam  "prof_igv": float,
     * @bodyParam  "prof_neto": float,
     * @bodyParam  "prof_fac": float,
     * @bodyParam  "prof_finan": float,
     * @bodyParam  "prof_val_cuo": float,
     * @response {
     *    "resp": "proforma cliente creada"
     * }
     */
    public function create(Request $request)
    {
        DB::beginTransaction();

        try {
            $proformaCliente = ProformaCliente::create([
                // 'id_pro' => $request->input('id_pro'),
                'id_cli' => $request->input('id_cli'),
                'prof_fec' => new DateTime(),
                'prof_mon' => $request->input('prof_mon'),
                'id_proy' => $request->input('id_proy'),
                'id_col' => $request->input('id_col'),
                'solcli_id' => $request->input('solcli_id'),
                'prof_cre' => $request->input('prof_cre'),
                'prof_imp_ini' => $request->input('prof_imp_ini'),
                'prof_int' => $request->input('prof_int'),
                'prof_cuo' => $request->input('prof_cuo'),
                'prof_val' => $request->input('prof_val'),
                'prof_tie_ent' => $request->input('prof_tie_ent'),
                'prof_cos_dir' => $request->input('prof_cos_dir'),
                'prof_gas_ind' => $request->input('prof_gas_ind'),
                'prof_uti' => $request->input('prof_uti'),
                'prof_bas_imp' => $request->input('prof_bas_imp'),
                'prof_igv' => $request->input('prof_igv'),
                'prof_neto' => $request->input('prof_neto'),
                'prof_fac' => $request->input('prof_fac'),
                'prof_finan' => $request->input('prof_finan'),
                'prof_val_cuo' => $request->input('prof_val_cuo'),
                'est_reg' => 'A',
            ]);

            DB::commit();
            //all good
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e,
            ], 500);
        }
        return response()->json([
            'resp' => 'Proforma cliente creada',
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Retornar proforma del cliente
     *
     * Retorna proforma del cliente por medio de su Id
     *
     * @urlParam  id required El ID de la proforma del cliente.
     *
     * @response {
     *      "data :
     *          {
     * @bodyParam  "id_pro":int
     * @bodyParam  "id_cli": int,
     * @bodyParam  "prof_mon": int,
     * @bodyParam  "id_proy": int,
     * @bodyParam  "id_col": int,
     * @bodyParam  "solcli_id": int,
     * @bodyParam  "prof_cre": 1-2-3,
     * @bodyParam  "prof_imp_ini": float,
     * @bodyParam  "prof_int": float,
     * @bodyParam  "prof_cuo": int,
     * @bodyParam  "prof_val": char,
     * @bodyParam  "prof_tie_ent": char,
     * @bodyParam  "prof_cos_dir": float,
     * @bodyParam  "prof_gas_ind": float,
     * @bodyParam  "prof_uti": float,
     * @bodyParam  "prof_bas_imp": float,
     * @bodyParam  "prof_igv": float,
     * @bodyParam  "prof_neto": float,
     * @bodyParam  "prof_fac": float,
     * @bodyParam  "prof_finan": float,
     * @bodyParam  "prof_val_cuo": float,
     *              "proyecto":{
     *                  "id_proy":0,
     *                  "nom_proy":"string",
     *                  "ser_proy": "NTWC-P-",
     *                  "num_proy": 0,
     *                  "id_cli": 0,
     *                  "est_reg": "A",
     *                  "cliente": {}
     *               },
     *              "proforma_cliente_detalles": [{
                        * "id_prof_det": int,
                        * "id_pro": int,
                        * "id_prod": int,
                        * "prof_det_can": int,
                        * "prof_det_pre_lis": float,
                        * "prof_det_imp": float,
                        * "prof_det_cos": float,
                        * "prof_det_tcos": float,
                        * "prof_det_com": float,
                        * "id_prov": int,
                        * "prof_prod_serv": int,
                        * "prof_des_prod": char,
                        * "prof_can_prod": float
     *              }]
     *          },
     *      "size":0
     * }
     */
    public function show($id)
    {
        try {
            $proforma_cabecera = ProformaCliente::with(['proformaClienteDetalles'])->find($id);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e,
            ], 500);
        }

        if ($proforma_cabecera) {
            return response()->json($proforma_cabecera, 200, [], JSON_NUMERIC_CHECK);
        } else {
            return response()->json([
                'resp' => 'No se encontro la proforma cliente',
            ], 500);
        }
    }

    public function edit(ProformaCliente $proformaCliente)
    {
        //
    }

    public function update(Request $request, ProformaCliente $proformaCliente)
    {
        //
    }

    public function destroy(ProformaCliente $proformaCliente)
    {
        //
    }

    /**
     * Anular proforma de cliente
     *
     * Anula una proforma
     *
     * @urlParam  id required El ID de la proforma del cliente.
     *
     * @response {
     *    "resp": "Proforma anulada"
     * }
     */

    public function annul($id) {
        try {
            $proformaCliente = ProformaCliente::find($id);
            $proformaCliente->fill(array('est_reg' => 'AN'))->save();
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }

        return response()->json([
            'resp' => 'Proforma del cliente Anulada'
        ], 200, [], JSON_NUMERIC_CHECK);
    }
}
