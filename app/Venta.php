<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table='ventas';
    protected $primaryKey='id';
	public $timestamps=false;

	protected $fillable =[
        'producto_id',
        'fecha',
        'pagoscol',
        'quien_vendio',
        'precio_venta',
        'comprador'
    ];

    public function prodcutos()
    {
        return $this->hasMany('App\Producto', 'producto_id', 'id');
    }

    public function users()
    {
        return $this->hasMany('App\User', 'quien_vendio', 'id');
    }
}
