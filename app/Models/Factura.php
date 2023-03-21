<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $id
 * @property $folio
 * @property $nombre
 * @property $direccion
 * @property $codigo_postal
 * @property $descripcion
 * @property $cantidad
 * @property $precio_unitario
 * @property $subtotal
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factura extends Model
{
    
    static $rules = [
		// 'folio' => 'required',
		'nombre' => 'required',
		'direccion' => 'required',
		'codigo_postal' => 'required|digits:5',
		'descripcion' => 'required',
		'cantidad' => 'required',
		'precio_unitario' => 'required',
		'subtotal' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['folio','nombre','direccion','codigo_postal','descripcion','cantidad','precio_unitario','subtotal','total'];



}
