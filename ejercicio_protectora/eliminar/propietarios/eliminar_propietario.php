<?php
	include("../../conexio/conexion_php.php");
	$sql="DELETE FROM propietarios WHERE id = ".$_GET["id"];

	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Eliminación incorrecta: ' . mysqli_error());
	}else{
		echo "Hem eliminat el propietari amb ID: ".$_GET["id"];
	}
	
	mysqli_close($conn);
?>

<form method="post" action="../../admin/listado_propietarios.php" style="text-align:center";>
						<br/><input type="submit" name="Volver" value="Volver" style="font-family: monospace"><br/><br/> 
</form>