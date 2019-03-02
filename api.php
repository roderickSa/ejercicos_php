<?php

class Api{

	private $api;
	private $response;

	public function __construct(){

	   $this->api;
	   $this->response;
	}

	public function getClientes(){

		$this->api="https://comidas-demo.herokuapp.com/cliente/listar";
		$this->response=file_get_contents($this->api);

		return $this->response=json_decode($this->response,true);
	}

	public function getCliente($id){

		$this->api="https://comidas-demo.herokuapp.com/cliente/buscar/id/".$id;
		$this->response=file_get_contents($this->api);

		return $this->response=json_decode($this->response,true);
	}

}

$obj=new Api();

$listado=$obj->getClientes();

foreach ($listado as $index) {
	echo $index['id']." ".$index['nombre']." ".$index['apellido']." ".$index['email']."<br>";
}
echo "<hr/>";

$obj2=new Api();

$cliente=$obj2->getCliente(12);

foreach ($cliente as $index) {
	echo $index." ";
}

?>