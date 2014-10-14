<?php
	$usuario = $_POST["name"];
	$contra = $_POST["password"];
	$correo = $_POST["email"];
	
	if(($usuario != "") && (%contra != "") ){
		if((strcpm($usuario,"proteco")==0) && (strcmp($contra,"proteco123") == 0)){
			header("Location: Mi Pagina Web.html");
		}
		else
			header("Location: cont_incorrecto.php");
	}
	else
		header("Location: fallido.php");

?>