<?php

if(isset($_POST['enviar'])){
   
   $nombre=$_POST['nombre'];
   $profesion=$_POST['profesion'];
   $edad=$_POST['edad'];

   echo "me haz mandado ".$nombre." ".$profesion." ".$edad;
}


?>