<?php 

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class AuthController extends BaseController{

	public function getLogin(){
		return $this->render('login.twig');
	}
}


?>