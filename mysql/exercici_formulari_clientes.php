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
		Exercici formulari clients
			
	-->
	<?php
	include("conexion_php.php");
	include("session_idioma.php");
	
	$value=NULL;
		if(isset($_GET["id"]) && (int)$_GET["id"]>0)
		{
			$sql="SELECT * FROM clientes WHERE id = ".$_GET["id"];
			$resultado = mysqli_query($conn,$sql);
			
			//print_r($resultado);
			
			foreach($resultado as $value){
				
			}
			
			$action= "update_cliente.php?id=".$_GET['id'];
			$nombreBoton=MODIFICA;
		}else
		{
			$action="guardar_cliente.php";
			$nombreBoton=GUARDA;
		}
		
		//----------------------------------------------------------------------
		
		
		//print_r($_SESSION['idioma']);
		//----------------------------------------------------------------------
		
	?>
	<h1 style="text-align:Center"> <?php echo TITLE; ?></h1><br/>
	<?php
		include("div_header_lang.php");
	?>
			<form method="post" class="formulari" action="<?php echo $action; ?>">
			
				<div style="border: 1px solid black; text-align:center; padding-top:3%; padding-bottom:3%;";>
						<?php echo NAME; ?> &nbsp;&nbsp;&nbsp;<input type="text" name="nombre" id="nombre" value="<?php if(isset($value))  echo $value["nombre"]; ?>" maxlength="15"/><br>
						<?php echo SURNAME; ?> <input type="text" name="apellidos" value="<?php if(isset($value))  echo $value["apellido"]; ?>" id="apellidos" maxlength="25"/><br>
						<?php echo DNI; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="dni" id="dni" value="<?php if(isset($value))  echo $value["dni"]; ?>" maxlength="9"/><br>
				</div>			
				<div class="footer">
					<br/>
						<input type="submit" name="Enviar" value="<?php echo $nombreBoton;?>"><br/><br/> 
						
						<a href="lista_clientes.php"><?php echo ENLLASCLIENT; ?></a><br/> <br/> 
						<a href="index.php"><?php echo BACKTOMENU; ?></a><br/> <br/> 
				</div>
			</form>
			
			 
						
			 

	

</html>