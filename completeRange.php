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

$resultado=CompleteRange::build([5,15]);
   var_dump($resultado);
   for ($i=0 ;$i<count($resultado) ;$i++) {
   	 echo $resultado[$i]."<br/>";
   }

    $siguiente=0;
   while ($siguiente<count($resultado)) {
   	 echo $resultado[$siguiente]."<br>";
   	 $siguiente++;
   }
?>