function validateEntry(formID){
//aqui se va a leer el archivo de registro para ver si ya esta registrado el ticket
	

}

function registerEntry(formID){
//aqui se va a escribir el nuevo registro


}

function loaded() {
	document.getElementById("rifaForm").addEventListener("submit",
		function(event) {
			event.preventDefault();
			var validEntry;
			if(validEntry = validateEntry(this.id)) {
				registerEntry(this.id);
			}else{
				document.getElementById("resultadoRifa").innerHTML = "El ticket que usted registro no es valido";
			}
		},
		false);
}

window.addEventListener("load", loaded, false);
