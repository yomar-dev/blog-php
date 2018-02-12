<?php 

namespace App\Controllers;

class IndexController{

	public function getIndex(){
		global $pdo;

		$sql = "SELECT * FROM blog_posts ORDER BY id DESC";
		$query = $pdo->prepare($sql);
		$query->execute();

		$blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);
		return render('../views/index.php', ['blogPosts' => $blogPosts]);
	}
}


?>