<?php
	$usuario = $_POST["name"];
	$contra = $_POST["password"];
	$correo = $_POST["email"];
	
	if(($usuario != "") && (%contra != "") ){
		if((strcpm($usuario,"proteco")==0) && (strcmp($contra,"proteco123") == 0)){
			header("Location: enlace1.html");
		}
		else
			header("Location: enlace2.html");
	}
	else
		header("Location: enlace2.html");

?>
