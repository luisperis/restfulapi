<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Penya extends Model{

	protected $table = 'penya';

	protected $primarykey = 'id';

	protected $filltable = array{'nombre', 'descripcion'};
	
}