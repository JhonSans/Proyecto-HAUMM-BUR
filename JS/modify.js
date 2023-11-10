function MostrarBot(){
	
	/*----INPUT----*/
	var estadoActual = document.getElementsByClassName("input-script");
	
	[].forEach.call(estadoActual, function(input){
		input.style.background = "none";
		input.style.padding = "0px";
		input.disabled = !input.disabled;
	});	
	
	var datoActual = document.getElementsByClassName("input-datos");
	
	[].forEach.call(datoActual, function(dato){
		dato.style.background = "none";
		dato.style.padding = "0px";
		dato.hidden = !dato.hidden;
	});
	
	/*----BOTON----*/
	
	var botonActual = document.getElementsByClassName("boton_script");
	
	[].forEach.call(botonActual, function(button){
		button.hidden = !button.hidden;
	});
}

function BotProv(){

	/*----INPUT----*/
	
	var estadoActual = document.getElementsByClassName("input-script");
	
	[].forEach.call(estadoActual, function(input){
		input.style.background = "rgba(221,220,202,1.00)";
		input.style.borderRadius = "8px"; 
		input.style.height = "30px";
		input.style.padding = "5px";
		input.disabled = !input.disabled;
	});	
	
	var datoActual = document.getElementsByClassName("input-datos");
	
	[].forEach.call(datoActual, function(dato){
		dato.style.background = "rgba(221,220,202,1.00)";
		dato.style.borderRadius = "8px"; 
		dato.style.height = "30px";
		dato.style.padding = "5px";
		dato.hidden = !dato.hidden;
	});
	
	/*----BOTON----*/
	
	var botonActual = document.getElementsByClassName("boton_script");
	
	[].forEach.call(botonActual, function(button){
		button.hidden = !button.hidden;
	});	
	
}