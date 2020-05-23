<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Producto;
use App\Http\Requests\CreateProductoRequest as CreateProductoRequest;
use App\Http\Requests\UpdateProductoRequest as UpdateProductoRequest;
use App\Http\Resources\ProductoResource as ProductoResource;

/**
* @OA\Info(title="API Productos", version="1.0")
*
* @OA\Server(url="http://localhost")
*/
class ProductoController extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/productos",
    *     tags={"Productos"},
    *     summary="Mostrar productos",
    *     description="Retorna la lista de productos",
    *     @OA\Response(
    *         response=200,
    *         description="Successful",
    *         @OA\JsonContent(ref="#/components/schemas/ProductoResource")
    *     )
    * )
    */
    public function getProductos()
    {
        $productos = Producto::get();
        return ProductoResource::collection($productos);
    }

    public function get($id) {
        $producto = Producto::find($id);
        return $producto;
    }

    /**
     * @OA\Post(
     *      path="/api/productos",
     *      operationId="CrearProducto",
     *      tags={"Productos"},
     *      summary="Crear Producto",
     *      description="Crea un nuevo producto",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/CreateProductoRequest")
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful",
     *         @OA\JsonContent(ref="#/components/schemas/ProductoResource")
     *     )
     * )
     */
    public function create(CreateProductoRequest $request) {
        $producto = Producto::create($request->all());

        //return (new ProductoResource($producto))
        return ($this->getProductos())
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * @OA\Post(
     *      path="/api/productos/{id}",
     *      operationId="ModificarProducto",
     *      tags={"Productos"},
     *      summary="Modificar Producto",
     *      description="Modifica un producto existente",
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/CreateProductoRequest")
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful",
     *         @OA\JsonContent(ref="#/components/schemas/ProductoResource")
     *     )
     * )
     */
    public function edit($id, UpdateProductoRequest $request) {
        $producto = $this->get($id);
        $producto->fill($request->all())->save();
        //return $producto;
        //return (new ProductoResource($producto))
        return ($this->getProductos())
             ->response()
             ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    /**
    * @OA\Get(
    *     path="/api/productos/delete/{id}",
    *     tags={"Productos"},
    *     summary="Eliminar producto",
    *     description="Elimina un producto",
    *     @OA\Parameter(
    *          name="id",
    *          required=true,
    *          in="path",
    *          @OA\Schema(
    *              type="integer"
    *          )
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Successful",
    *         @OA\JsonContent(ref="#/components/schemas/ProductoResource")
    *     )
    * )
    */
    public function delete($id) {
        $producto = $this->get($id);
        $producto->delete();
        //return response(null, Response::HTTP_NO_CONTENT);
        return ($this->getProductos())
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
