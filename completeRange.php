<?php

class CompleteRange{

	static function build($collection){

		if(count($collection)==0){
          return [];
		}

		$start=$collection[0];
		$end=$collection[count($collection)-1];

		return range($start, $end);
	}
}

$resultado=CompleteRange::build([]);
var_dump($resultado);
?>