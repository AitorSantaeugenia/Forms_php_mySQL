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
				margin:0 auto;
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
			<form method="post" class="formulari" action="<?php echo $action; ?>">
					<div style="border: 1px solid black; text-align:center; padding-top:3%; padding-bottom:3%;";>
						
						Marca: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" style="margin: auto;" name="marca" value="<?php if(isset($_GET["id"])) echo $value["marca"]; ?>" id="marca" maxlength="15"/><br>
						
						Model: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="model" id="model" value="<?php if(isset($_GET["id"])) echo $value["model"]; ?>" maxlength="15"/><br>
						
						Número de placa: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="nplaca" id="nplaca" value="<?php if(isset($_GET["id"])) echo $value["numPlaca"]; ?>" maxlength="10"/><br>
						
						Número de portes: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="nportes" id="nportes" value="<?php if(isset($_GET["id"])) echo $value["numPuerta"]; ?>" maxlength="1"/><br>
						
						Capota: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="capota" id="capota" width="173" style="width: 173px" value="<?php echo $value["descapotable"]; ?>"/>
										 <option value="true">1</option>
										 <option value="false">0</option>
								</select><br/>
								
						Terreno: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="tterreno" id="tterreno" value="<?php if(isset($_GET["id"])) echo $value["tipoTerreno"]; ?>" maxlength="10"/><br>
						
						Automática: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select  name="automat" width="173" style="width: 173px" id="automat" value="<?php if(isset($_GET["id"])) echo $value["automatica"]; ?>"/>
										 <option value="true">1</option>
										 <option value="false">0</option>
									</select><br/>
									
						Potencia: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="potencia" id="potencia" maxlength="4" value="<?php if(isset($_GET["id"])) echo $value["potencia"]; ?>"/><br>
					</div>
											
							<?php

							
							?>
					<div class="footer">
						<br/><br/>
						<input type="submit" name="Enviar" value="<?php echo $nombreBoton;?>"><br/><br/>
						<a href="lista_coches.php">Lisa de coches</a><br/> <br/> 
						<a href="index.html">Volver al menu</a><br/> <br/> 
					</div>
			</form>

	</body>
	

</html>