	<?php
	//$testing = $_POST;
	print_r($_POST);
	echo "<br/>";
	//------------------------------------------

	include("clientes.php");
	
	$miCliente = new Cliente(); 

	$miCliente->setNombre($_POST["nombre"]);
	$miCliente->setApellido($_POST["apellidos"]);
	$miCliente->setdni($_POST["dni"]);
	//echo $numeros%23;
	
print_r($_POST);
	echo "<br/>";
	echo "Nombre: ".$miCliente->getNombre()."<br/>";
	echo "Apellidos: ".$miCliente->getApellido()."<br/>";
	echo "DNI: ".$miCliente->getdni()."<br/>";
	
	?>
	
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

	
	//UPDATE clientes SET direccion = pie2, direccion = 'pie2' WHERE id = 1;
	//DELETE FROM clientes WHERE id = 4

	//echo "puertas".$miCoche->getNumPuertas();
	
	$sql = "INSERT INTO clientes (nombre, apellido, dni)
	VALUES ('".$miCliente->getNombre()."', '".$miCliente->getApellido()."', '".$miCliente->getdni()."')";
	
	
	if (mysqli_query($conn, $sql)){
		echo "Inserción correcta";
	} else {
		echo "Error: " . mysqli_error($conn);
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
<br/>
<form method="post" action="lista_clientes.php">
			<?php
					echo "<input type='submit' name='volver' value='Ver lista clientes'><br/><br/>"; 
			?>
</form>