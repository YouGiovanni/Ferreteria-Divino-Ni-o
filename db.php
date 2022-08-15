<?php
$conn = new mysqli("localhost","root","","ferreteria");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}

    
/*BoardKey*/
?>

