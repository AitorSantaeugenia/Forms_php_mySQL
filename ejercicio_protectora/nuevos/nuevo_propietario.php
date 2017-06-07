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
		EXERCICI PROTECTORA ANIMAL - NUEVO ANIMAL FORM
			
	-->
	<?php
	include("../conexio/conexion_php.php");
	$value=NULL;
		if(isset($_GET["id"]) && (int)$_GET["id"]>0)
		{
			$sql="SELECT * FROM propietarios WHERE id = ".$_GET["id"];
			$resultado = mysqli_query($conn,$sql);
			
			//print_r($resultado);
			
			foreach($resultado as $value){
				
			}
			
			$action= "../updates/update_propietarios.php?id=".$_GET['id'];
			$nombreBoton="Modificar";
		}else
		{
			$action="../guardar/guardar_propietario_noadmin.php";
			$nombreBoton="Guardar";
		}			
	?>
	<h1 style="text-align:Center"> NUEVO ANIMAL FORM </h1><br/>
			<!-- FORMULARI ANIMALS -->
			<form method="post" class="formulari" action="<?php echo $action; ?>">
			
				<div style="border: 1px solid black; text-align:center; padding-top:3%; padding-bottom:3%;";>
					Nom:<input type="text" name="nombre" id="nombre" value="<?php if(isset($value))  echo $value["nombre"]; ?>" maxlength="30"/><br>
					Llinatges: <input type="text" name="apellidos" value="<?php if(isset($value))  echo $value["apellidos"]; ?>" id="apellidos" maxlength="30"/><br>
					DNI:<input type="text" name="dni" id="dni" value="<?php if(isset($value))  echo $value["dni"]; ?>" maxlength="9"/><br>
					E-mail:<input type="text" name="email" id="email" value="<?php if(isset($value))  echo $value["email"]; ?>" maxlength="35"/><br>
					Telèfon:<input type="text" name="telefono" value="<?php if(isset($value))  echo $value["telefono"]; ?>" id="telefono" maxlength="35"/><br>
					Direcció:<input type="text" name="direccio" id="direccio" value="<?php if(isset($value))  echo $value["direccio"]; ?>" maxlength="35"/><br>
						<br><br>
				</div>			
				<div class="footer">
					<br/>
						<input type="submit" name="Enviar" value="<?php echo $nombreBoton;?>"><br/><br/> 
						
						<a href="../admin/listado_propietarios.php">Llista propietaris</a><br/> <br/> 
						<a href="../index.php">INDEX</a><br/> <br/> 
				</div>
			</form>
			<!-- FI FORMULARI ANIMALS -->
</html>