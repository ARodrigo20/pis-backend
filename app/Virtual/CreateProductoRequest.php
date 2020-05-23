<?php

/**
 * @OA\Schema(
 *      title="ProductoRequest",
 *      description="Producto request body data",
 *      type="object",
 *      required={"codigo", "nombre"}
 * )
 */

class CreateProductoRequest
{
    /**
     * @OA\Property(
     *      title="codigo",
     *      description="codigo del producto"
     * )
     *
     * @var string
     */
    public $codigo;

    /**
     * @OA\Property(
     *      title="nombre",
     *      description="nombre del producto",
     * )
     *
     * @var string
     */
    public $nombre;

    /**
     * @OA\Property(
     *      title="descripcion",
     *      description="descripcion del producto",
     * )
     *
     * @var string
     */
    public $descripcion;

    /**
     * @OA\Property(
     *      title="cantidad",
     *      description="cantidad del producto"
     * )
     *
     * @var number
     */
    public $cantidad;
}