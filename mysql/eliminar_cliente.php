<?php
	include("conexion_php.php");
	
	$sql="DELETE FROM clientes WHERE id = ".$_GET["id"];

	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Eliminación incorrecta: ' . mysqli_error());
	}else{
		echo "Se ha eliminado correctamente el cliente con id.".$_GET["id"];
	}
	
	mysqli_close($conn);
?>

<form method="post" action="lista_clientes.php" style="text-align:center";>
						<br/><input type="submit" name="Volver" value="Volver" style="font-family: monospace"><br/><br/> 
</form>