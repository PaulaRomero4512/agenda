function validar(){
//definir variables
var usuario;
var contrasena;
var mensajes;
var mensajes2;

usuario = document.getElementById('usuario').value;
contrasena = document.getElementById('contrasena').value;
mensajes="El correo o la clave no pueden quedar Vacios";
mensajes2="La clave debe tener como mínimo 6 caracteres";

if(usuario===""||contrasena===""){
	//alert ("El correo o la clave no pueden quedar Vacios");
	document.getElementById('mensaje').innerHTML=mensajes;
	return false;
}

if(contrasena.length<6){
	document.getElementById('mensaje').innerHTML=mensajes2;
	return false;
}
}
