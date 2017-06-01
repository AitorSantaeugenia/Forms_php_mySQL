<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
			strong { 
				font-size:22px;
			}
		</style>
	<body>
	<!-- 
		Exercici#33 
			Formulario nom, direcció, telefon, dni
			
	-->
		<?php
		include("conexion_php.php");
		
		
		//print_r($value);
			
		if(isset($_GET["id"]) && (int)$_GET["id"]>0)
		{$sql="SELECT * FROM coches WHERE id = ".$_GET["id"];
		$resultado = mysqli_query($conn,$sql);
		
		//print_r($resultado);
		
		foreach($resultado as $value){
			
		}
			$action= "update_coches.php?id=".$_GET['id'];
			//$marca = $_POST["marca"];

			$nombreBoton="MODIFICAR";
		}else
		{
			$action="guardar.php";
			$nombreBoton="GUARDAR";
		}
		
		?>
	
	<h1 style="text-align:Center"> Exercici#1 - FORM per SQL</h1><br/>
			<form method="post" action="<?php echo $action; ?>">
						Marca: <input type="text" name="marca" value="<?php if(isset($_GET["id"])) echo $value["marca"]; ?>" id="marca" maxlength="15"/><br>
						Model: <input type="text" name="model" id="model" value="<?php if(isset($_GET["id"])) echo $value["model"]; ?>" maxlength="15"/><br>
						
						Número de placa: <input type="text" name="nplaca" id="nplaca" value="<?php if(isset($_GET["id"])) echo $value["numPlaca"]; ?>" maxlength="10"/><br>
						Número de portes: <input type="text" name="nportes" id="nportes" value="<?php if(isset($_GET["id"])) echo $value["numPuerta"]; ?>" maxlength="1"/><br>
						Capota: <select name="capota" id="capota" value="<?php echo $value["descapotable"]; ?>"/>
										 <option value="true">1</option>
										 <option value="false">0</option>
								</select><br/>
						Terreno: <input type="text" name="tterreno" id="tterreno" value="<?php if(isset($_GET["id"])) echo $value["tipoTerreno"]; ?>" maxlength="10"/><br>
						Automática: <select  name="automat" id="automat" value="<?php if(isset($_GET["id"])) echo $value["automatica"]; ?>"/>
										 <option value="true">1</option>
										 <option value="false">0</option>
									</select><br/>
						Potencia: <input type="text" name="potencia" id="potencia" maxlength="4" value="<?php if(isset($_GET["id"])) echo $value["potencia"]; ?>"/><br>
						
											
							<?php

							
							?>
						<br/><br/><input type="submit" name="Enviar" value="<?php echo $nombreBoton;?>">
						<a href="lista_coches.php">Lisa de coches</a><br/> <br/> 
						<a href="index.html">Volver al menu</a><br/> <br/> 
			</form>

	</body>
	

</html>