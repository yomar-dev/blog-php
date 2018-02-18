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
	/**
	 * NOTA: Tuvimos que crear dos nuevas columnas en la BD llamadas:
	 * created_at y updated_at porque Eloquent por defecto siempre se inserte un registro
	 * va a llenar una columna llamada created_at y cuando se modifique llenará el
	 * campo updated_at, cabe destacar que esta funcionalidad se puede deshabilitar.
	 */
	protected $fillable = ['title', 'content'];
}