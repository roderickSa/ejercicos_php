<?php

require_once("../apiPlatos.php");
$obj=new ApiPlatos();

switch ($_GET['op']) {

	case 'listaPlatos':

	     $datos=$obj->getPlatos();

	     $data='<table class="table table-bordered table-hover">
					<thead>
						<tr class="text-center">
							<th>Nombre</th>
							<th>Precio</th>
							<th>Estado</th>
							<th>Descripción</th>
						</tr>
					</thead>
					<tbody>';
	     
	     if(count($datos)>0){

	     	foreach ($datos as $row) {		

	     	   $data.='<tr>
                         <td>'.$row["nombre"].'</td>
                         <td>S/. '.$row["precio"].'</td>
                         <td>'.$row["estado"].'</td>
                         <td>'.$row["descripcion"].'</td>
	     	          </tr>';
	     	}

	     	$data.='</tbody></table>';

	     }else{
	     	echo "Sin datos";
	     }

	       echo $data;         

		break;

		case 'buscarId':

		$id=$_GET['id'];

	     $dato=$obj->getPlato($id);

	     $data='<table class="table table-bordered table-hover">
					<thead>
						<tr class="text-center">
							<th>Nombre</th>
							<th>Precio</th>
							<th>Estado</th>
							<th>Descripción</th>
						</tr>
					</thead>
					<tbody>';
	     
	     if(count($dato)>0){

	     	   $data.='<tr>
                         <td>'.$dato["nombre"].'</td>
                         <td>S/. '.$dato["precio"].'</td>
                         <td>'.$dato["estado"].'</td>
                         <td>'.$dato["descripcion"].'</td>
	     	          </tr>';
	     	

	     	$data.='</tbody></table>';

	     }else{
	     	echo "Sin datos";
	     }

	       echo $data;         

		break;
}

?>