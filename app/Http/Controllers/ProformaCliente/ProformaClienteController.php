<?php

namespace App\Http\Controllers\ProformaCliente;

// use App\ProformaCliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ProformaCliente\ProformaCliente;
use App\Models\ProformaCliente\ProformaClienteDet;

class ProformaClienteController extends Controller
{
  
    public function index()
    {
        

        try {
            $proforma_cabecera = ProformaCliente::with(['proyecto','cliente','proformaClienteDetalles'])->get();
        } catch (Exception $e){
            return response()->json([
                'error' => 'Ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }
        return  response()->json([
            'data' => $proforma_cabecera,
            'size' => count($proforma_cabecera)
        ],200, [], JSON_NUMERIC_CHECK);
    }

  
    public function create(Request $request)
    {
        DB::beginTransaction();

        try {
            $proformaCliente = ProformaCliente::create([
                            // 'id_pro' => $request->input('id_pro'),
                            'id_cli'=> $request->input('id_cli'),
                            'prof_fec'=> $request->input('prof_fec'),
                            'prof_mon'=> $request->input('prof_mon'),
                            'id_proy'=> $request->input('id_proy'),
                            'id_col'=> $request->input('id_col'),
                            'solcli_id'=> $request->input('solcli_id'),
                            'prof_cre'=> $request->input('prof_cre'),
                            'prof_imp_ini'=> $request->input('prof_imp_ini'),
                            'prof_int'=> $request->input('prof_int'),
                            'prof_cuo'=> $request->input('prof_cuo'),
                            'prof_val'=> $request->input('prof_val'),
                            'prof_tie_ent'=> $request->input('prof_tie_ent'),
                            'prof_cos_dir'=> $request->input('prof_cos_dir'),
                            'prof_gas_ind'=> $request->input('prof_gas_ind'),
                            'prof_uti'=> $request->input('prof_uti'),
                            'prof_bas_imp'=> $request->input('prof_bas_imp'),
                            'prof_igv'=> $request->input('prof_igv'),
                            'prof_neto'=> $request->input('prof_neto'),                                                     
                            'prof_fac'=> $request->input('prof_fac'),
                            'prof_finan'=> $request->input('prof_finan'),
                            'prof_val_cuo'=> $request->input('prof_val_cuo'),
                             'est_reg' => 'A'
            ]);

           
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
            'resp' => 'Proforma cliente creada'
        ], 200, [], JSON_NUMERIC_CHECK);
    }

 
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        try {
            $proforma_cabecera =ProformaCliente::with(['proformaClienteDetalles'])->find($id);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }
        
        if($proforma_cabecera) {
            return response()->json($proforma_cabecera, 200, [], JSON_NUMERIC_CHECK);
        } else {
            return response()->json([
                'resp' => 'No se encontro la proforma cliente'
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
}
