<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Apuesta extends Model{

	protected $table = 'apuesta';

	protected $primarykey = 'id';

	protected $filltable = array{'jornada', 'fecha', 'aciertos', 'gasto', 'premio', 'estado'};

	public function columnas(){
		this-> hasMany('Columna');
	}
	
}