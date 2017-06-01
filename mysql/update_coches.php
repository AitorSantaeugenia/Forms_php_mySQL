<?php
	include("conexion_php.php");
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
	
	//$sql="UPDATE coches SET marca='".$_POST["marca"]."',model='".$_POST["model"]."',numPuerta='".$_POST["nportes"]."',numPlaca='".$_POST["nplaca"]."',automatica='".$_POST["automat"]."',tipoTerreno='".$_POST["tterreno"]."',descapotable='".$_POST["capota"]."',potencia='".$_POST["potencia"]."'	WHERE id = ".$_GET["id"];
	$sql="UPDATE coches SET marca='".$miCoche->getNumMarca()."', model='".$miCoche->getNumModel()."',numPuerta='".$miCoche->getNumPuertas()."', numPlaca='".$miCoche->getNumPlaca()."', automatica='".$miCoche->getNumAutomatica()."', tipoTerreno='".$miCoche->getTerreno()."', descapotable='".$miCoche->getisdescapotable()."', potencia='".$miCoche->getNumPotencia()."' WHERE id = ".$_GET["id"];
	echo $sql;
	print_r($_POST);

	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Update incorrecta: ' . mysqli_error());
	}else{
		echo "Update cliente con id.".$_GET["id"];
	}
	
	mysqli_close($conn);
?>

<form method="post" action="lista_coches.php">
						<input type="submit" name="Volver" value="Volver"><br/><br/> 
</form>