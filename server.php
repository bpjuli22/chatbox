<?php
class DataBase
{
	public $server;
	public $a;
	private $server_name='localhost',$username='root',$password='',$database_name='chatbox';
	public function connect(){
		$this->server=mysqli_connect($this->server_name,$this->username,$this->password,$this->database_name);
		  if ($this->server) {
		  	// echo "wow connected";
		  	return $this->server;
		  }
		  else {
		  	echo "Not connected";
		  }
	}
		
	public function variablepass($a){
		$this->a=$a;
	}
	


}