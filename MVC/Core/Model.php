<?php 
namespace Core;

use PDO;
abstract class Model{
	protected static function getDB(){
		static $db = null;

		if($db === null){
			$host='localhost';
			$dbname='mvc';
			$username='root';
			$password='mysql';

			try {
				$db = new PDO("mysql:host=$host;dbname=$dbname;charset:utf8",$username,$password);
				return $db;
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	} 
}

 ?>
