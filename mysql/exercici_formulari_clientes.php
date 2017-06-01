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
		Exercici formulari clients
			
	-->
	<?php
	include("conexion_php.php");
			
		if(isset($_GET["id"]) && (int)$_GET["id"]>0)
		{
			$sql="SELECT * FROM clientes WHERE id = ".$_GET["id"];
			$resultado = mysqli_query($conn,$sql);
			
			//print_r($resultado);
			
			foreach($resultado as $value){
				
			}
			
			$action= "update_cliente.php?id=".$_GET['id'];
			$nombreBoton="MODIFICAR";
		}else
		{
			$action="guardar_cliente.php";
			$nombreBoton="GUARDAR";
		}
		
	?>
	<h1 style="text-align:Center"> Exercici#1 - FORM per SQL</h1><br/>
			<form method="post" action="<?php echo $action; ?>">
						Nombre: <input type="text" name="nombre" id="nombre" value="<?php if(isset($_GET["id"])) echo $value["nombre"]; ?>" maxlength="15"/><br>
						Apellidos: <input type="text" name="apellidos" value="<?php if(isset($_GET["id"])) echo $value["apellido"]; ?>" id="apellidos" maxlength="25"/><br>
						DNI: <input type="text" name="dni" id="dni" value="<?php if(isset($_GET["id"])) echo $value["dni"]; ?>" maxlength="9"/><br>
						<br/>
						<br/>
						 
						<input type="submit" name="Enviar" value="<?php echo $nombreBoton;?>"><br/><br/> 
						
						<a href="lista_clientes.php">Lisa de clientes</a><br/> <br/> 
						<a href="index.html">Volver al menu</a><br/> <br/> 

			</form>
			
			 
						
			 

	

</html>