<?php 
/*require '../App/Controllers/Posts.php';
require '../Core/Router.php';*/

spl_autoload_register(function ($class){
	$root = dirname(__DIR__);
	$file = $root . '/' .str_replace('\\', '/', $class) . '.php';
	if (is_readable($file)) {
		require $root . '/' . str_replace('\\', '/', $class) . '.php';	
	}
});

$router = new Core\Router();
//ADD ROUTES
$router->add('',['controller'=>'home','action'=>'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');

//Display the Routing Table
/*echo "<pre>";
echo htmlspecialchars(print_r($router->getRoutes(),true));
echo "</pre>";

$url = $_SERVER['QUERY_STRING'];

if($router->match($url)){
	echo "<pre>";
	print_r($router->getParams());
	echo "</pre>";
}else{
	echo "NO Route Found for URL '$url'";
}*/
$router->dispatch($_SERVER['QUERY_STRING']);
 ?>

