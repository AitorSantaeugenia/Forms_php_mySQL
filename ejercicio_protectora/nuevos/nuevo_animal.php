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
			$sql="SELECT * FROM animales WHERE id = ".$_GET["id"];
			$resultado = mysqli_query($conn,$sql);
			
			//print_r($resultado);
			
			foreach($resultado as $value){
				
			}
			
			$action= "../updates/update_animales.php?id=".$_GET['id'];
			$nombreBoton="Modificar";
		}else
		{
			$action="../guardar/guardar_animal.php";
			$nombreBoton="Guardar";
		}			
	?>
	<h1 style="text-align:Center"> NUEVO ANIMAL FORM </h1><br/>
			<!-- FORMULARI ANIMALS -->
			<form method="post" class="formulari" action="<?php echo $action; ?>">
			
				<div style="border: 1px solid black; text-align:center; padding-top:3%; padding-bottom:3%;";>
					Espècie:<input type="text" name="especie" id="especie" value="<?php if(isset($value))  echo $value["especie"]; ?>" maxlength="25"/><br>
					Raça: <input type="text" name="raza" value="<?php if(isset($value))  echo $value["raza"]; ?>" id="raza" maxlength="25"/><br>
					Pes:<input type="text" name="peso" id="peso" value="<?php if(isset($value))  echo $value["peso"]; ?>" maxlength="5"/><br>
					Edat:<input type="text" name="edad" id="edad" value="<?php if(isset($value))  echo $value["edad"]; ?>" maxlength="2"/><br>
					Altura:<input type="text" name="altura" value="<?php if(isset($value))  echo $value["altura"]; ?>" id="altura" maxlength="5"/><br>
					Tipus de menjar:<input type="text" name="tipo_comida" id="tipo_comida" value="<?php if(isset($value))  echo $value["tipo_comida"]; ?>" maxlength="30"/><br>
					Color:<input type="text" name="color" value="<?php if(isset($value))  echo $value["color"]; ?>" id="color" maxlength="15"/><br>
					Imatge:<input type="text" name="imagen" id="imagen" value="<?php if(isset($value))  echo $value["imagen"]; ?>" maxlength="250"/>
						<br><br>
				</div>			
				<div class="footer">
					<br/>
						<input type="submit" name="Enviar" value="<?php echo $nombreBoton;?>"><br/><br/> 
						
						<a href="../admin/listado_animales.php">Llista animals</a><br/> <br/> 
						<a href="../index.php">INDEX</a><br/> <br/> 
				</div>
			</form>
			<!-- FI FORMULARI ANIMALS -->
</html>