<?php
include('server.php');
include 'Pages\Header.php';
class ServerInit
{
	private $server;
	function __construct($db){
		$this->server=$db;
		
        
	}

	public function formview()
	{
	

	}

	
}

$con=new DataBase;
$connect=$con->connect();

$Searchq= new ServerInit($connect);
$Searchq->formview();

?>

