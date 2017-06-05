<?php
	include("conexion_php.php");
	include("session_idioma.php");
	$sql="DELETE FROM coches WHERE id = ".$_GET["id"];

	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Eliminación incorrecta: ' . mysqli_error());
	}else{
		echo FRASEELIMINARCOCHE.$_GET["id"];
	}
	
	mysqli_close($conn);
?>

<form method="post" action="lista_coches.php" style="text-align:center";>
						<br/><input type="submit" name="Volver" value="Volver" style="font-family: monospace"><br/><br/> 
</form>