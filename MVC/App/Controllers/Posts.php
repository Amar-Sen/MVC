<?php 

namespace App\Controllers;

class Posts extends \Core\Controller{
	public function indexAction(){
		echo "Hello I am in <b>index</b> action in <b>Posts</b> Controller";
		// echo '<p>Query String Parameters:<pre>'. htmlspecialchars(print_r($_GET,true)).'<pre></p>';
	}
	public function addNewAction(){
		echo "Hello I am in <b>addNew</b> action in <b>Posts</b> Controller";
	}
	public function editAction(){
		echo "Hello I am in <b>edit</b> action in <b>Posts</b> Controller";
		echo '<p>Route Parameters:<pre>'. htmlspecialchars(print_r($this->route_params,true)).'<pre></p>';
	}
}

 ?>
