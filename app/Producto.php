<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    protected $table='prodcutos';
    protected $primaryKey='id';
	public $timestamps=false;

	protected $fillable =[
        'area_id',
        'cliente_vende',
		'descripcion',
        'preciopropuesto',
        'consignado',
        'disponibles',
        'imagen'
    ];
}
