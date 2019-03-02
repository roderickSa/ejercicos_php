<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listado de platos de Lima</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

     <script type="text/javascript" src="js/platos.js"></script>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <button class="btn btn-primary mr-4" type="button" id="listarTodo">Listar Todo</button>

	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" id="textoid" 
	      type="text" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" id="buscar" type="submit">Search</button>
	    </form>
    </nav>

    <div class="container mt-4"><label id="texto"></label></div>

	<div class="container jumbotron mt-4" id="datos">		
	</div>	
	
</body>
</html>