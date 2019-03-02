<?php

require_once("procesa.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="procesa.php" method="post">

	   <input type="text" name="nombre" placeholder="nombre"><br/>
	   <input type="text" name="profesion" placeholder="profesion"><br/>
	   <input type="number" name="edad" placeholder="edad"><br/><br/>
	   <input type="submit" name="enviar" value="enviar">

	</form>
</body>
</html>
