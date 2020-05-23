<?php

namespace App\Virtual\Models;

/**
 * @OA\Schema(
 *     title="Producto",
 *     description="Producto model",
 *     @OA\Xml(
 *         name="Producto"
 *     )
 * )
 */
class Producto
{

    /**
     * @OA\Property(
     *     title="id",
     *     description="id",
     *     format="int64"
     * )
     *
     * @var integer
     */
    private $id;

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
