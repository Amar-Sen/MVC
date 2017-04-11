<?php 
namespace App\Controllers\Admin;

class Users extends \Core\Controller{
	protected function before(){
		//Make sure Admin log in(condition)
		//return false;
	}
	public function indexAction(){
		echo "Admin->User->Index";
	}
}
 ?>
