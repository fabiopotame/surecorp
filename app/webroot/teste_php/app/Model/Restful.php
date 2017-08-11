<?php
App::uses('AppModel', 'Model');

class Restful extends AppModel {

	public $useTable = false;

	public $provinces = array(
		'AC' => 'AC',	 
		'AL' => 'AL',	 
		'AP' => 'AP',	 
		'AM' => 'AM',	 
		'BA' => 'BA',	 
		'CE' => 'CE',	 
		'DF' => 'DF',	 
		'ES' => 'ES',	 
		'GO' => 'GO',	 
		'MA' => 'MA',	 
		'MT' => 'MT',	 
		'MS' => 'MS',	 
		'MG' => 'MG',	 
		'PA' => 'PA',	 
		'PB' => 'PB',	 
		'PR' => 'PR',	 
		'PE' => 'PE',	 
		'PI' => 'PI',	 
		'RJ' => 'RJ',	 
		'RN' => 'RN',	 
		'RS' => 'RS',	 
		'RO' => 'RO',	 
		'RR' => 'RR',	 
		'SC' => 'SC',	 
		'SP' => 'SP',	 
		'SE' => 'SE',	 
		'TO' => 'TO'
		);

	public function getParams($data = array(), $token = null)
	{
		$params = 'token='.$token.'&';

		// insere os parametros caso haja no filtro de busca
		if(!empty($data)) {
			foreach ($data as $key => $value) {
				$params .= $key . '=' . urlencode($value) . '&';
			}	
		} 
		return $params;
	}

	public function sendDataForm($data)
	{
		return array('Restful' => $data); 
	}

	public function getData($data)
	{
		$users = file_get_contents( Router::url('/', true) . $data );
		return json_decode($users); 
	}
}