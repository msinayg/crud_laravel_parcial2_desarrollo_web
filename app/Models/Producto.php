<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $producto
 * @property $idMarca
 * @property $descripcion
 * @property $precio_costo
 * @property $precio_venta
 * @property $existencia
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'producto' => 'required',
		'idMarca' => 'required',
		'descripcion' => 'required',
		'precio_costo' => 'required',
		'precio_venta' => 'required',
		'existencia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto','idMarca','descripcion','precio_costo','precio_venta','existencia'];



}
