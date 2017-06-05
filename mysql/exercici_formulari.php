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
		<?php
		include("conexion_php.php");
		//----------------------------------------------------------------------
		include("session_idioma.php");
		//----------------------------------------------------------------------
		//print_r($value);
		$value=NULL;
		if(isset($_GET["id"]) && (int)$_GET["id"]>0)
		{$sql="SELECT * FROM coches WHERE id = ".$_GET["id"];
		$resultado = mysqli_query($conn,$sql);
		 
		foreach($resultado as $value){
			
		}
			$action= "update_coches.php?id=".$_GET['id'];
			//$marca = $_POST["marca"];
			
			$nombreBoton=MODIFICA;
		}else
		{
			$action="guardar.php";
			$nombreBoton=GUARDA;
		}
		
		?>
	
	<h1 style="text-align:Center"> <?php echo TITLE; ?></h1><br/>
	<?php
	
		include("div_header_lang.php");
	?>
			<form method="post" class="formulari" action="<?php echo $action; ?>">
					<div style="border: 1px solid black; text-align:center; padding-top:3%; padding-bottom:3%;";>
						
						<?php echo MARCA; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" style="margin: auto;" name="marca" value="<?php if(isset($value)) echo $value["marca"]; ?>" id="marca" maxlength="15"/><br>
						
						<?php echo MODEL; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="model" id="model" value="<?php if(isset($value)) echo $value["model"]; ?>" maxlength="15"/><br>
						
						<?php echo NPLACA; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="nplaca" id="nplaca" value="<?php if(isset($value)) echo $value["numPlaca"]; ?>" maxlength="10"/><br>
						
						<?php echo NPORTES; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="nportes" id="nportes" value="<?php if(isset($value)) echo $value["numPuerta"]; ?>" maxlength="1"/><br>
						
						<?php echo CAPOTA; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="capota" id="capota" width="173" style="width: 173px" value="<?php echo $value["descapotable"]; ?>"/>
										 <option value="true">1</option>
										 <option value="false">0</option>
								</select><br/>
								
						<?php echo TERRENO; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="tterreno" id="tterreno" value="<?php if(isset($value)) echo $value["tipoTerreno"]; ?>" maxlength="10"/><br>
						
						<?php echo AUTOM; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select  name="automat" width="173" style="width: 173px" id="automat" value="<?php if(isset($value)) echo $value["automatica"]; ?>"/>
										 <option value="true">1</option>
										 <option value="false">0</option>
									</select><br/>
									
						<?php echo POTENCIA; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="potencia" id="potencia" maxlength="4" value="<?php if(isset($value)) echo $value["potencia"]; ?>"/><br>
					</div>
											
							<?php

							
							?>
					<div class="footer">
						<br/><br/>
						<input type="submit" name="Enviar" value="<?php echo $nombreBoton;?>"><br/><br/>
						<a href="lista_coches.php"><?php echo ENLLASCOCHES; ?></a><br/> <br/> 
						<a href="index.php"><?php echo BACKTOMENU; ?></a><br/> <br/> 
					</div>
			</form>

	</body>
	

</html>