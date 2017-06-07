<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
			strong { 
				font-size:22px;
			}
			
			.formulari{
				font-family:monospace;
				text-align:center;
			}
			
			.footer{
				text-align:center;
				border:1px solid black;
			}
			
			.footer input{
				font-family:monospace;
			}			
			.footer a{
				font-family:monospace;
				text-decoration:none;
			}



		</style>
	<body>
	<!-- 
		EXERCICI PROTECTORA ANIMAL - RESERVA
			
	-->
	<?php
	include("/conexio/conexion_php.php");
	include("/session/session_idioma.php");

		
		
		//print_r($_GET);
		
		//MINI TRAMPA!!!!
		if(isset($_GET["id"])){
			$_SESSION["id_perro"] = $_GET["id"];
			$action="guardar/guardar_propietario_noadmin.php";
			$nombreBoton="Guardar";
		
		
		//print_r($_SESSION);
	?>
	<h1 style="text-align:Center"> FORMULARIO DE ADOPCIÓN </h1><br/>
			<!-- FORMULARI ANIMALS -->
			<form method="post" class="formulari" action="<?php echo $action; ?>">
			
				<div style="border: 1px solid black; text-align:center; padding-top:3%; padding-bottom:3%;";>
					<?php echo NAME; ?><input type="text" name="nombre" id="nombre" value="<?php if(isset($value))  echo $value["nombre"]; ?>" maxlength="30"/><br>
					<?php echo LLINATGE; ?><input type="text" name="apellidos" value="<?php if(isset($value))  echo $value["apellidos"]; ?>" id="apellidos" maxlength="30"/><br>
					<?php echo DNI; ?><input type="text" name="dni" id="dni" value="<?php if(isset($value))  echo $value["dni"]; ?>" maxlength="9"/><br>
					<?php echo EMAIL; ?><input type="text" name="email" id="email" value="<?php if(isset($value))  echo $value["email"]; ?>" maxlength="35"/><br>
					<?php echo TELF; ?><input type="text" name="telefono" value="<?php if(isset($value))  echo $value["telefono"]; ?>" id="telefono" maxlength="35"/><br>
					<?php echo DIRECC; ?><input type="text" name="direccio" id="direccio" value="<?php if(isset($value))  echo $value["direccio"]; ?>" maxlength="35"/><br><br>
					<a href="reserva.php">Usuario ya registrado?</a><br/> <br/> 
						<br><br>
				</div>			
				<div class="footer">
					<br/>
						<input type="submit" name="Enviar" value="<?php echo $nombreBoton;?>"><br/><br/> 
						<a href="index2.php">INDEX</a><br/> <br/> 
				</div>
			</form>
	<?php 
		}else{
			$action="guardar/guardar_propietario_noadmin.php";
			$nombreBoton="ACEPTAR";
	?>
	<h1 style="text-align:Center"> FORMULARIO DE ADOPCIÓN </h1><br/>
	<form method="post" class="formulari" action="<?php echo $action; ?>">
		<?php echo DNI; ?><input type="text" name="dni" id="dni" value="<?php if(isset($value))  echo $value["dni"]; ?>" maxlength="9"/><br>
		<?php echo EMAIL; ?><input type="text" name="email" id="email" value="<?php if(isset($value))  echo $value["email"]; ?>" maxlength="35"/><br>			
		<br/><div class="footer">
			<br/>
				<input type="submit" name="Enviar" value="<?php echo $nombreBoton;?>"><br/><br/> 
				<a href="index2.php">INDEX</a><br/> <br/> 
		</div>
	</form>
	<?php
		}
	?>
			<!-- FI FORMULARI ANIMALS -->
</html>