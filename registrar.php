<?php
//Para registrar
include('db.php');

$correo = $_POST["txtcorreo"];
$pass 	= $_POST["txtpassword"];
$usu 	= $_POST["txtnombre"];
$tel 	= $_POST["txttelefono"];

$queryusuario 	= mysqli_query($conn,"SELECT * FROM login WHERE correo = '$correo'");
$nr 			= mysqli_num_rows($queryusuario); 

if ($nr == 0)
{
	$queryregistrar = "INSERT INTO login(correo, pass, usu, tel) values ('$correo','$pass','$usu','$tel')";
	

if(mysqli_query($conn,$queryregistrar))
{
	echo "<script> alert('Usuario registrado: $usu');window.location= 'index.html' </script>";
}
else 
{
	echo "Error: " .$queryregistrar."<br>".mysql_error($conn);
}
}
else
{
		echo "<script> alert('No puedes registrar este correo: $correo');window.location= 'index.html' </script>";
}
/*Creado por:Board Key*/
?>