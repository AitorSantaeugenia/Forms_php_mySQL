<?php
//------------------------------------------------------------
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "concesionario";


	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// comprovar conexió
	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql="SELECT * FROM clientes WHERE id>0";

	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Consulta no válida: ' . mysqli_error());
	}

	foreach($resultado as $item){
		print_r($item);
		echo "<br>"; 
	}

	mysqli_close($conn);
?>