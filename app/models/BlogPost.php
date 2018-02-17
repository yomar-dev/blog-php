<?php 


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Indicamos que esta clase debe comportarse como un modelo de Eloquent.
 */
class BlogPost extends Model{
	/**
	 * Eloquent por defecto necesito que declaremos protected el nombre de la
	 * tabla que va a estar utilizando la BD.
	 */
	protected $table = 'blog_posts';
}