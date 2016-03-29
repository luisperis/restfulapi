<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Columna extends Model{

	protected $table = 'columna';

	protected $primarykey = 'id';

	protected $filltable = array{'col1', 'col2', 'col3', 'col4', 'col5', 'col6', 'col7', 'col8', 'col9', 'col10', 'col11','col12','col13','col14', 'col15'};

	public function apuesta(){
		this-> belongsTo('Apuesta');
	}
	
}