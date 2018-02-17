<?php 

namespace App\Controllers;

use App\Models\BlogPost;

class IndexController extends BaseController{

	public function getIndex(){
		/**
		 * Lo que se hace en la linea de abajo es como si se ejecutara el siguiente Query:
		 * SELECT * FROM blog_posts ORDER BY id DESC
		 */
		$blogPosts = BlogPost::query()->orderBy('id', 'desc')->get();
		return $this->render('index.twig', ['blogPosts' => $blogPosts]);
	}
}


?>