<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Módulo de Autoloading de composer.
 */
require_once '../vendor/autoload.php';
require_once '../config.php';

$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
define('BASE_URL', $baseUrl);

$route = $_GET['route'] ?? '/';

use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();
$router->get('/', function() use ($pdo){
	$sql = "SELECT * FROM blog_posts ORDER BY id DESC";
	$query = $pdo->prepare($sql);
	$query->execute();

	$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
	include '../views/index.php';
});

/**
 * Objeto que va a tomar la ruta que nos esta llegando para luego
 * llamar el metodo que realmente necesita.
 */
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
echo $response;

?>