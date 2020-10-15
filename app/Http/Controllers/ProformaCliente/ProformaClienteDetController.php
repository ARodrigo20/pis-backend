<?php

namespace App\Http\Controllers\ProformaCliente;

use App\Http\Controllers\Controller;
use App\Models\ProformaCliente\ProformaCliente;
use App\Models\ProformaCliente\ProformaClienteDet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @group ProformaClienteDetalle
 * APIs para proforma cliente detalle
 */
class ProformaClienteDetController extends Controller
{

    public function index()
    {
        //
    }

    /**
     * Crear Proforma Cliente Detalle
     *
     * Crea una proforma cliente detalle
     *
     * @bodyParam "id_pro": int,
     * @bodyParam "id_prod": int,
     * @bodyParam "prof_det_can": int,
     * @bodyParam "prof_det_pre_lis": float,
     * @bodyParam "prof_det_imp": float,
     * @bodyParam "prof_det_cos": float,
     * @bodyParam "prof_det_tcos": float,
     * @bodyParam "prof_det_com": float,
     * @bodyParam "id_prov": int,
     * @bodyParam "prof_prod_serv": int,
     * @bodyParam "prof_des_prod": char,
     * @bodyParam "prof_can_prod": float
     * @response {
     *    "resp": "proforma cliente detalle creada"
     * }
     */
    public function create(Request $request)
    {
        DB::beginTransaction();

        try {
            $proformaClientedet = ProformaClienteDet::create([

                'id_pro' => $request->input('id_pro'),
                'id_prod' => $request->input('id_prod'),
                'prof_det_can' => $request->input('prof_det_can'),
                'prof_det_pre_lis' => $request->input('prof_det_pre_lis'),
                'prof_det_imp' => $request->input('prof_det_imp'),
                'prof_det_cos' => $request->input('prof_det_cos'),
                'prof_det_tcos' => $request->input('prof_det_tcos'),
                'prof_det_com' => $request->input('prof_det_com'),
                'id_prov' => $request->input('id_prov'),
                'prof_prod_serv' => $request->input('prof_prod_serv'),
                'prof_des_prod' => $request->input('prof_des_prod'),
                'prof_can_prod' => $request->input('prof_can_prod'),
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
            'resp' => 'Proforma cliente detalle creada',
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(ProformaClienteDet $proformaClienteDet)
    {
        //
    }

    public function edit(ProformaClienteDet $proformaClienteDet)
    {
        //
    }

    public function update(Request $request, ProformaClienteDet $proformaClienteDet)
    {
        //
    }

    public function destroy(ProformaClienteDet $proformaClienteDet)
    {
        //
    }
}
