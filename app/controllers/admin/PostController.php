<?php 

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BlogPost;
use Sirius\Validation\Validator;

class PostController extends BaseController{

	public function getIndex(){
		$blogPosts = BlogPost::all();
		return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
	}

	public function getCreate(){
		return $this->render('admin/insert-post.twig');
	}

	public function postCreate(){
		$errors = [];
		$result = false;
		$validator = new Validator();
		/**
		 * Indicamos que el campo 'title' y 'content' son requeridos.
		 */
		$validator->add('title', 'required');
		$validator->add('content', 'required');

		if($validator->validate($_POST)){			
			$blogPost = new BlogPost([
				'title' => $_POST['title'],
				'content' => $_POST['content']
			]);

			$blogPost->save();		
			$result = true;
		}else{
			/**
			 * Obtenemos todos los errores devueltos por el validador.
			 */
			$errors = $validator->getMessages();
		}

		return $this->render('admin/insert-post.twig', [
			'result' => $result,
			'errors' => $errors
		]);
	}
}

?>