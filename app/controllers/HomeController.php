<?php


namespace App\Controllers;
use \App\Models\Article;
use \App\Models\Comment;
use Illuminate\Database\Capsule\Manager as Capsule;
/**
* 
*/
class HomeController
{


	public static function home(){

		$result = array(
			'just'=>1561,
			);


		require dirname(__FILE__).'/../views/home.html';
	}

	public static function article(){

		echo "<pre>";
		// use \App\Models\Article;
		$users = Capsule::table('descript')->get();
		print_r($users);

		require dirname(__FILE__).'/../views/article.html';
	}


	public function comment(){

		Comment::getit();

		require dirname(__FILE__).'/../views/comment.html';
	}

	public function doit(){

		echo "hehe";
	}
}

?>