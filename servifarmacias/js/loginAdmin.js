function login(){
	var password = "";
	var redirect = false;
	do{
		if(redirect){
			 if(confirm("¿Quiere ir a la pagina principal?")){
				window.location.assign("index.html");
			}
		}
		password = prompt("Esta pagina esta protegida por contraseña. Escriba la contraseña: ");
		redirect = true;
	} while(password !== "servifar2015");
}

window.onpaint = login();
