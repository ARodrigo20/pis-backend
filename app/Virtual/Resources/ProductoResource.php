<?php

namespace App\Virtual\Resources;

/**
 * @OA\Schema(
 *     title="ProductoResource",
 *     description="Producto resource",
 *     @OA\Xml(
 *         name="ProductoResource"
 *     )
 * )
 */
class ProductoResource
{
    /**
     * @OA\Property(
     *     title="data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Producto[]
     */
    private $data;
}
