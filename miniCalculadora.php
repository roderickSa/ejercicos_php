<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="main.js"></script>

</head>
<body>

  <div class="container mt-4">

  	<form action="" method="post" class="form">

  		<table class="table table-bordered table-hover">
  			<tbody>
  				<tr>
  					<div>
  						<td colspan="4" class="text-center">Calculadora</td>
  				    </div>
  				</tr>
  				<tr>
  					<div class="col-md-6">
	  					<td colspan="2">
	  						<input type="text" name="numero1" id="numero1" class="form-control" 
	  						 placeholder="Ingresa el numero 1">
	  					</td>
  				    </div>
  				    <div class="col-md-6">
	  					<td colspan="2">
	  						<input type="text" name="numero2" id="numero2" class="form-control"
	  						 placeholder="Ingresa el numero 2">
	  					</td>
  				    </div>
  				</tr>
  				<tr>
  						<td>
  							<div class="custom-control custom-radio">
	                             <input type="radio" class="custom-control-input"
	                              id="radio1" name="grupoRadio" value="suma" required="required" >
								  <label class="custom-control-label" for="radio1">Suma</label>
							</div>
  						</td>
  						<td>
  							<div class="custom-control custom-radio">
	                             <input type="radio" class="custom-control-input"
	                              id="radio2" name="grupoRadio" value="resta" required="required">
								  <label class="custom-control-label" for="radio2">Resta</label>
							</div>
  						</td>
  						<td>
  							<div class="custom-control custom-radio">
	                             <input type="radio" class="custom-control-input"
	                             id="radio3" name="grupoRadio" value="multiplicacion" required="required">
								  <label class="custom-control-label" for="radio3">Multiplicación</label>
							</div>
  						</td>
  						<td>
  							<div class="custom-control custom-radio">
	                             <input type="radio" class="custom-control-input"
	                              id="radio4" name="grupoRadio" value="division" required="required">
								  <label class="custom-control-label" for="radio4">División</label>
							</div>
  						</td>
  				</tr>
  				<tr>
  					<td colspan="4">
  						<div align="center">
  							<button type="button" id="calcular"
  							 class="btn btn-primary">Calcular</button>
  						</div>	 
  					</td>
  				</tr>
  			</tbody>
  		</table>
  		
  	</form>
  	
  </div>

  <div class="container" align="center">
  	<label class="jumbotron" id="resultado"></label>
  </div>
	
</body>
</html>