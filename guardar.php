<?php
	$nombre =$_POST["nombre"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$asunto = "Contacto UNEAC.org.mx";
	$mensajeWeb = $_POST["comentarios"];
	
	
	
		$correos = array('oscar.chuc@uneac.org.mx','pablo.rosete@uneac.org.mx','rolando.metri@uneac.org.mx','contacto@uneac.org.mx' );
		
	
		$mensaje = "";
		$mensaje .= "Se ha recibido un nuevo contacto a trav&eacute;s de su p&aacute;gina web.<br /><br />";
		$mensaje .= "Los datos del contacto son los siguientes:<br />";
		$mensaje .= "<b>Nombre: </b>".$nombre."<br />";
		$mensaje .= "<b>Email: </b>".$email."<br />";
		$mensaje .= "<b>Tel&eacute;fono: </b>".$telefono."<br />";
		$mensaje .= "<b>Asunto: </b>".$asunto."<br />";
		$mensaje .= "<b>Mensaje: </b>".$mensajeWeb."<br /><br />";
 
		$cabeceras = "From: $nombre $email \r\nContent-Type: text/html; charset=iso-8859-1\r\n";     		
		for($i=0; $i<count($correos); $i++)
		{   	
			mail($correos[$i],$asunto,$mensaje,$cabeceras);
		} 
		header("location: http://uneac.org.mx/index.html");
		
	
	?>