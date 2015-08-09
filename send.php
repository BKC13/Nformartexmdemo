<?php
	$destino= "bkcisneros13@gmail.com";
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$asunto = $_POST["asunto"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: ".$nombre . "\nEmail: ".$email . "\nMensaje: ".$mensaje;
	mail($destino, $asunto, $contenido);
	header("Location:gracias.html");/*Redirecciona al usuario a una nueva página*/
 
?>