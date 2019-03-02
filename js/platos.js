$("document").ready(function(){

listaPlatos();

	$("#buscar").click(function(e) {

	       e.preventDefault();
        platoId();
        $("#textoid").val("");
	});

	$("#listarTodo").click(function(event) {
		event.preventDefault();
		listaPlatos();
	});     
});

function listaPlatos(){

     cargando();

	$.ajax({
		url: "ajax/Platos.php?op=listaPlatos",
		type: 'GET',
		dataType: 'html',
		data: {},
		err:function(){
			console.log("error al consultar");
		},
		success:function(data,status){
			ocultar();
           $("#datos").html(data);
		}
	});
	
}
function platoId(){   

      ocultar();
	  cargando();

       var id=$("#textoid").val();

		$.ajax({
			url: 'ajax/Platos.php?op=buscarId',
			type: 'GET',
			dataType: 'html',
			data: {id: id},
			err:function(){
				console.log("algun error");
			},
			success:function(data,status){console.log(data);
				ocultar();
               $("#datos").html(data);
			}
		});
	
}

function cargando(){
	$("#texto").html("cargando...");
}


function ocultar(){
	$("#texto").empty();
}
