<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>

		</style>
		
	<body>
	<!-- 
		Exercici#2 PROTECTORA DE ANIMALES | admin index.php
			
	-->
	<?php
	include("./conexio/conexion_php.php");
	

	?>
	<!-- INICI BODY -->
	<h1 style="text-align:Center"> PROTECTORA D'ANIMALS - ADMIN </h1><br/>
			<!-- INICI FORMULARI PROPIETARIS / CLIENTS -->
			<form method="post" action="./admin/listado_propietarios.php" style="text-align:center; ">
						<input type="submit" name="coches" style="font-family:monospace;" value="Propietarios">
			</form>
			
			<form method="post" action="./admin/listado_animales.php" style="text-align:center">
						<br/><br/><input type="submit" name="clientes" style="font-family:monospace;" value="Animales">
			</form>
			<!-- FI FORMULARI PROPIETARIS / CLIENTS -->
	</body>
	<!-- FI BODY -->

</html>