<?php

include('db.php');

$correo = $_POST["txtcorreo"];
$pass 	= $_POST["txtpassword"];
//Para iniciar sesión

$queryusuario = mysqli_query($conn,"SELECT * FROM login WHERE correo ='$correo' and pass = '$pass'");
$nr 		= mysqli_num_rows($queryusuario);  



if($correo == "jardanlp29@gmail.com" && $pass == "jordlp290535") //Modo de entrada del abministrador 
	{ 
		echo	"<script> alert('Bienvenido Jordan López Ventura.');window.location= 'administrador/admin.html' </script>";
		}


if ($nr == 1)  //Usuario Normal
	{ 
	echo	"<script> alert('Bienvenido $correo .');window.location= 'inicio.html' </script>";
	}
else
	{
	echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'index.html' </script>";
	}

/*Creado por:Board Key*/
?>
