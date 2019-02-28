<?php

class ChangeString{

	private $abecedario=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t',
	'u','v','x','y','z'];

	function build($input){

        for ($i=0; $i<strlen($input) ; $i++) { 
        	
        	$input[$i]=$this->buildCharacter($input[$i]);
        }

        echo $input;
	}

	function buildCharacter($c){

        $isUpper = ($c == strtoupper($c));
        
		$pos=array_search(strtolower($c),$this->abecedario);  //buscamos

		if($pos === false){
             return $c;
         }
          
        if($pos == count($this->abecedario)-1){  //vemos si es la ultima letra -> 'z'
           $pos=0;
        }else $pos=$pos+1;      

        if($isUpper){
                return strtoupper($this->abecedario[$pos]);
        }else return $this->abecedario[$pos];
         

        //if(in_array($c, $this->abecedario)){ //comparamos
          // echo "si esta";
        //}else echo "no esta";

		//return $output;
	}
}

 $changeString=new ChangeString();

 $changeString->build('123 Abcd*3Z');

 //$changeString->build('123 casa*3');

?>