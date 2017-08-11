<?php
App::uses('Controller', 'Controller');

class NetflixroulettesController extends AppController {

	public function get_name_title()
	{
		$this->autoRender = false;
		return json_encode($this->Netflixroulette->getNameMovie());
	}

	public function index()
	{


		
	}


}

