<?php 

class Conexion{
	private $host = "54.212.248.221";
	private $dbname="SCPAGN";
	private $user="userSCPAGN";
	private $password="@a&Tg2VO7XpC";
	private $port=5432;
	public $conn;

	public function conectar(){
		$this->conn = null;

		try{
			$this->conn = new PDO("pgsql:host=". $this->host . ";port=" . $this->port.";dbname=". $this->dbname, $this->user, $this->password);
		}catch(PDOException $exception){
			echo "Connection error: " . $exception->getMessage();
		}
		return $this->conn;
	}
}

/*class Conexion{
	public function conectar(){
		$host="54.212.248.221";
		$dbname="SCPAGN";
		$user="userSCPAGN";
		$password="@a&Tg2VO7XpC";
		$conexion = new PDO("pgsql:host=$host;port=5432;dbname=$dbname",$user,$password);
		return $conexion;
	}
}
create table entity.usuariodoc(
	idusuariodoc serial primary key not null,
	nombres varchar(250) not null,
	apellidos varchar(250) not null,
	correo varchar(250) not null,
	usuario varchar(250) not null,
	password varchar(250)not null
);
*/
?>
