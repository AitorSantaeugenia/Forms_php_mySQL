	<?php
	//$testing = $_POST;
	//print_r($testing);
	//------------------------------------------

	include("objeto_coche.php");
	
	if($_POST["automat"] == true){
		$_POST["automat"] = 1;
	}else{
		$_POST["automat"] = 0;
	}
	
	if($_POST["capota"] == true){
		$_POST["capota"] = 1;
	}else{
		$_POST["capota"] = 0;
	}
	
	$miCoche = new Coche(); 

	$miCoche->setNumPuertas($_POST["nportes"]);
	$miCoche->setNumPotencia($_POST["potencia"]);
	$miCoche->setNumMarca($_POST["marca"]);
	$miCoche->setNumModel($_POST["model"]);
	$miCoche->setNumPlaca($_POST["nplaca"]);
	//$miCoche->setNumPortes($_POST["nportes"]);
	$miCoche->setNumAutomatica($_POST["automat"]);
	$miCoche->setTerreno($_POST["tterreno"]);
	$miCoche->setisdescapotable($_POST["capota"]);

	/*
	echo "Número de puertas: ".$miCoche->getNumPuertas()."<br/>";
	echo "Potencia: ".$miCoche->getNumPotencia()."<br/>";
	echo "Marca: ".$miCoche->getNumMarca()."<br/>";
	echo "Modelo: ".$miCoche->getNumModel()."<br/>";
	echo "Número de placa: ".$miCoche->getNumPlaca()."<br/>";
	echo "Número de puertas: ".$miCoche->getNumPortes()."<br/>";
	echo "És automática?: ".$miCoche->getNumAutomatica()."<br/>";
	echo "Terreno: ".$miCoche->getTerreno()."<br/>";
	echo "És descapotable?: ".$miCoche->getisdescapotable()."<br/>";
	*/
	

	?>
	
	<?php
	//------------------------------------------------------------
	
	include("conexion_php.php");

	
	//UPDATE clientes SET direccion = pie2, direccion = 'pie2' WHERE id = 1;
	//DELETE FROM clientes WHERE id = 4

	//echo "puertas".$miCoche->getNumPuertas();
	
	$sql = "INSERT INTO coches (numPuerta, marca, model, numPlaca, automatica, tipoTerreno, descapotable, potencia)
	VALUES ('".$miCoche->getNumPuertas()."', '".$miCoche->getNumMarca()."', '".$miCoche->getNumModel()."', '".$miCoche->getNumPlaca()."','".$miCoche->getNumAutomatica()."','".$miCoche->getTerreno()."','".$miCoche->getisdescapotable()."','".$miCoche->getNumPotencia()."')";
	
	
	if (mysqli_query($conn, $sql)){
		echo "Inserción correcta";
	} else {
		echo "Error: " . mysqli_error($conn);
	}

	$sql="SELECT * FROM coches WHERE id>0";

	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Consulta no válida: ' . mysqli_error());
	}

	foreach($resultado as $item){
		print_r($item);
		echo "<br>"; 
	}
	
	//----------------------------------------------------------------------
		//----------------------------------------------------------------------

	mysqli_close($conn);
?> 
<br/>

<form method="post" action="lista_coches.php" style="font-family: monospace; text-align:center;">
			<?php
					echo "<input type='submit' name='volver' style='font-family: monospace; text-align:center;' value='Ver lista clientes'><br/><br/>"; 
			?>
</form>