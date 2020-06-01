<?php

class server
{
	private $con;

	public function __construct()
	{
		
	}

	public function getStudentName($id_array)
	{
		return 'Sam'
	}
}

$params = array('uri' => 'WebServiceSOAP/server.php');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();

?>