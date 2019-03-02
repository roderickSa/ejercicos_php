<?php

class Par {

    
    public static function build($input){

    	 $salida='';
         $posicion=0;

    	for($i=0;$i<strlen($input);$i++){

             if($posicion==0 && $input[$i]=='('){
                $posicion=1;

             }elseif ($posicion==1 && $input[$i]==')') {
             	$salida.=': ()';
             	$posicion=0;
             }          
    	}
          
        return $salida;

    	}
    }

    echo Par::build('))(())')."<br>";
    echo Par::build(')))))((((()');

?>