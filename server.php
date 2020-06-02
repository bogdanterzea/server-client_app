<?php

class server
{
	private $con;

	public function __construct()
	{
		$this->con = (is_null($this->con)) ? self::connect() : $this->con;
	}

	static function connect()
	{
		$con = mysql_connect('localhost', 'root', 'root');
		$db = mysql_select_db('soap', $con);

		return $con;
	}

	public function getStudentName($id_array)
	{
		$id = $id_array['id'];
		$sql = "SELECT name FROM students WHERE id = '$id'";
		$qry = mysql_query($sql, $this->con);
		$res = mysql_fetch_array($qry);
		return $res['name'];
	}
}

$params = array('uri' => 'WebServiceSOAP/server.php');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();

?>