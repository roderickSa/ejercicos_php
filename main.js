$(document).ready(function(){

	var resultado=$("#resultado");
	resultado.hide();

	$("#calcular").click(function(e){

	e.preventDefault();

	var suma=$("#radio1");
	var resta=$("#radio2");
	var multiplicacion=$("#radio3");
	var division=$("#radio4");

	var numero1=parseInt($("#numero1").val());
	var numero2=parseInt($("#numero2").val());

	if(isNaN(numero1) || isNaN(numero2)){
		console.log("No se puede realizar operaciones");
	}else{

		if(suma.is(':checked')){
        resultado.show('fast', function() {
        	resultado.css('color','black');
        	resultado.append(numero1+numero2);        	
        });
        despues_resultado();

	    }else if(resta.is(':checked')){
        resultado.show('fast', function() {
        	let resul=(numero1-numero2);
        	resultado.css('color','black');
        	if(resul<0){
              resultado.css('color','red');
        	}
        	resultado.append(resul);
        });
        despues_resultado();

	    }else if(multiplicacion.is(':checked')){
        resultado.show('fast', function() {
        	resultado.css('color','black');
        	resultado.append(numero1*numero2);
        });
        despues_resultado();

	    }else if(division.is(':checked')){
	    	if(numero2===0){
                console.log("no se puede dividir entre cero");
	    	}else {
	    		resultado.show('fast', function() {
	    			resultado.css('color','black');
        	        resultado.append(numero1/numero2);
	        });
	                despues_resultado();
	    	}
	    }		
	}	

    resetea();
});


function despues_resultado(){
	resultado.hide(5000);
	resultado.empty();
}

function resetea(){
	$("#numero1").val("");
	$("#numero2").val("");
}

});




