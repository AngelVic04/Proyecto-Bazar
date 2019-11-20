<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table='fotos';
    protected $primaryKey='id';
	public $timestamps=false;

	protected $fillable =[
		'producto_id',
        'path',
        'subida_por',
    ];
    
}
