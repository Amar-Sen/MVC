<?php 

namespace App\Controllers;

use \Core\View;

class Home extends \Core\Controller{

	public function indexAction(){
		// echo "Hello from <b>index</b> action in <b>Home</b> Controller";
		View::render('Home/index.php'); //Scope resolution for calling static methods
	}
}

 ?>
