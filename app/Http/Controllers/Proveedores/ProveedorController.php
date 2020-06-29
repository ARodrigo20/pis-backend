<?php

namespace App\Http\Controllers\Proveedores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\LogsController;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Proveedores\Proveedor;
use App\Http\Requests\Proveedores\Proveedor\ProveedorRequest as ProveedorRequest;

/**
 * @group Proveedores
 * APIs para proveedores
 */

class ProveedorController extends Controller
{
    /**
     * Retornar proveedores
     *
     * Retorna todos los proveedores
     *
     *
     * @response {
     *  "data" : [
     *     {
     *       "id_prov": 0,
     *       "razsoc_prov": "string",
     *       "ema_prov": "string",
     *       "num_doc_prov": "char",
     *       "id_tipdoc": 0,
     *       "est_reg": "char",
     *       "created_at": "2020-06-14T06:07:02.419Z",
     *       "updated_at": "2020-06-14T06:07:02.419Z",
     *       "tipo_documento": {
     *          "id_tipdoc": 0,
     *          "des_tipdoc": "string"
     *       }
     *     }
     *  ],
     *  "size":0
     * }
     */
    public function get()
    {
        Log::info('Pasooo:');
        try {
            $proveedores = Proveedor::with(['tipo_documento'])->where('est_reg', '!=', 'E')->get();
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }

        return response()->json([
            'data' => $proveedores,
            'size' => count($proveedores)
        ], 200, [], JSON_NUMERIC_CHECK);
    }
    /**
     * Retornar proveedor
     *
     * Retorna proveedor por Id
     *
     * @urlParam  id required El ID del proveedor.
     *
     * @response {
     *    "id_prov": 0,
     *       "razsoc_prov": "string",
     *       "ema_prov": "string",
     *       "num_doc_prov": "char",
     *       "id_tipdoc": 0,
     *       "est_reg": "char",
     *       "created_at": "2020-06-14T06:07:02.419Z",
     *       "updated_at": "2020-06-14T06:07:02.419Z",
     *       "tipo_documento": {
     *          "id_tipdoc": 0,
     *          "des_tipdoc": "string"
     *       }
     * }
     */


    public function getById($id)
    {
        try {
            $proveedor = Proveedor::with(['tipo_documento'])->find($id);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }

        if($proveedor) {
            return response()->json($proveedor, 200, [], JSON_NUMERIC_CHECK);
        } else {
            return response()->json([
                'resp' => 'No se encontro el proveedor'
            ], 500);
        }
    }

    /**
     * Crear proveedor
     *
     * Crea un proveedor
     *
     * @bodyParam  razsoc_prov string required Razon social del proveedor.
     * @bodyParam  ema_prov string email del proveeedor.
     * @bodyParam  num_doc_prov char required Numero de documento del proveedor.
     * @bodyParam  id_tipodoc int Tipo de documento del proveedor.
     *
     * @response {
     *    "resp": "proveedor creado"
     * }
     */

    public function create(ProveedorRequest $request)
    {
        Log::info('Pasooo:');
        try {
            $proveedor = Proveedor::create([
                'razsoc_prov' => $request->input('razsoc_prov'),
                'ema_prov' => $request->input('ema_prov'),
                'num_doc_prov' => $request->input('num_doc_prov'),
                'id_tipdoc' => $request->input('id_tipdoc'),
                'est_reg' => 'A'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }

        //Logs
        $descripcion = "Se creo el proveedor con ID: ".$proveedor->id_prov;
        $logs = new LogsController();
        $logs->create_log($descripcion, 1);
        ///////
        return response()->json([
            'resp' => 'Proveedor Creado'
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    /**
     * Modificar proveedor
     *
     * Modifica un proveedor
     *
     * @urlParam  id required El ID del proveedor.
     *
     * @bodyParam  razsoc_prov string required Razon social del proveedor.
     * @bodyParam  ema_prov string email del proveeedor.
     * @bodyParam  num_doc_prov char required Numero de documento del proveedor.
     * @bodyParam  id_tipodoc int Tipo de documento del proveedor.     *
     *
     * @response {
     *    "resp": "proveedor actualizado"
     * }
     */

    public function update(ProveedorRequest $request, $id)
    {
        try {
            $proveedor = Proveedor::find($id);
            $proveedor->fill(array(
                'razsoc_prov' => $request->input('razsoc_prov'),
                'ema_prov' => $request->input('ema_prov'),
                'num_doc_prov' => $request->input('num_doc_prov'),
                'id_tipdoc' => $request->input('id_tipdoc'),
            ))->save();
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }

        //Logs
        $descripcion = "Se modifico el proveedor con ID: ".$proveedor->id_prov;
        $logs = new LogsController();
        $logs->create_log($descripcion,2);
        ///////
        return response()->json([
            'resp' => 'Proveedor Actualizado'
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    /**
     * Eliminar proveedor
     *
     * Elimina un proveedor
     *
     * @urlParam  id required El ID del proveedor.
     *
     * @response {
     *    "resp": "proveedor eliminado"
     * }
     */

    public function delete($id) {
        try {
            $proveedor = Proveedor::find($id);
            $proveedor->fill(array('est_reg' => 'E'))->save();
        } catch (Exception $e) {
            return response()->json([
                'error' => 'ocurrio un error en el servidor',
                'desc' => $e
            ], 500);
        }

        //Logs
        $descripcion = "Se elimino el Proveedor con ID: ".$proveedor->id_prov;
        $logs = new LogsController();
        $logs->create_log($descripcion, 3);
        ///////
        return response()->json([
            'resp' => 'Proveedor Eliminado'
        ], 200, [], JSON_NUMERIC_CHECK);
    }







}
