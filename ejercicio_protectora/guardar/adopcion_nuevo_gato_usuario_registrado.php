	<?php
	include("../objetos/objeto_propietario.php");

	?>
	
	<?php
	//------------------------------------------------------------
	include("../conexio/conexion_php.php");
	include("../session/session_idioma.php");
	
	//--------------------------------------------------------------------------------------------------
	//COMPROVACIO SI EXISTEIX AMB DNI I CORREU 
	//--------------------------------------------------------------------------------------------------
		//print_r($_SESSION);
	$sql3 = "SELECT * FROM PROPIETARIOS WHERE dni='".$lastID."' AND email='".$lastID."'";
	
	if (mysqli_query($conn, $sql2)){
		echo "<br/>";
		echo INSERC;
		echo "<br/>";
	} else {
		echo "<br/>";
		echo "Error: " . mysqli_error($conn);
		echo "<br/>";
	}
	
	
	//----------------------------------------------------------------------
	//----------------------------------------------------------------------
	
	mysqli_close($conn);
?> 
<br/>

<form method="post" action="../index2.php" style="font-family: monospace; text-align:center;">
			<?php
					echo "<input type='submit' name='volver' style='font-family: monospace; text-align:center;' value='Volver al índice'><br/><br/>"; 
			?>
</form>