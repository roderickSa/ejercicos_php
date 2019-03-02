<?php

class ApiPlatos{

private $api;
private $response;

public function __construct(){

	$this->api;
	$this->response;
}

public function getPlatos(){

	$this->api="https://comidas-demo.herokuapp.com/producto/listar";
	$this->response=file_get_contents($this->api);

	return $this->response=json_decode($this->response,true);
}

public function getPlato($id){

	$this->api="https://comidas-demo.herokuapp.com/producto/buscar/id/".$id;
	$this->response=file_get_contents($this->api);

	return $this->response=json_decode($this->response,true);
}

}


?>