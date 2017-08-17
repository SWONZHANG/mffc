<?php

namespace App\Models;
use  Illuminate\Database\Eloquent\Model; 

class Article extends  Model 
{
	protected $table = 'descript';

	public static function first(){

		$users = Article::get();
		print_r($users);
	}
}

?>