<?php 
class App{
	public $root = '/prototipos/'; // declara onde está instalado o projeto

	public function __construct() {
		if(empty($_GET['page'])) {
			$this->redirect('index.php?page=home');
		}
		$page = $_GET['page'];
		if(file_exists('./views/'.$_GET['page'].'.php')) {
			include_once("views/{$_GET['page']}.php");
		} else {
			$this->redirect('index.php?page=404');
		}
	}

	public function redirect($route) {
		echo '<script type="text/javascript">window.location.replace("'.$this->root.$route.'");</script>';	
	}
}

New App();