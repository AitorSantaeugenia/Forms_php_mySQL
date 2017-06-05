<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
			.header{
				border:1px solid transparent;
			}
		</style>
		
	<body>
	<!-- 
		Exercici#1 FORM CLIENTES / COCHES MySQL + PHP
			Formulario nom, direcció, telefon, dni
			
	-->
	<?php
	include("conexion_php.php");
	include("session_idioma.php");
	
	//print_r ($_GET);
	//echo ("<br/>");
	//print_r ($_SESSION);

	
		

	?>
	
	<h1 style="text-align:Center"> <?php echo TITLE; ?></h1><br/>
	
		<div class="header">
			<form method="post" action="index.php" style="text-align:right; font-family:monospace";>
				<?php echo SELECTLANG; ?><select  name="idioma" width="173" style="width: 173px" id="idioma" onChange="document.location.href='index.php?idioma=' + this.value" />
										 <option value="es" <?php if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == "es") echo "selected"; ?>><?php echo NOMIDIOMAUN; ?></option>
										 <option value="ca" <?php if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == "ca") echo "selected"; ?> ><?php echo NOMIDIOMADOS; ?></option>
										 <option value="en" <?php if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == "en") echo "selected"; ?> ><?php echo NOMIDIOMATRES; ?></option>
				</select><br/>
			</form>
		</div>
	
		<h3 style="text-align:Center; font-family:monospace;"> <?php echo TITLEOBJECT; ?> </h3><br/>
			<form method="post" action="exercici_formulari.php" style="text-align:center; ">
						<input type="submit" name="coches" value="<?php echo BUTTONCOCHES; ?>" style="font-family:monospace;">
			</form>
			
			<form method="post" action="exercici_formulari_clientes.php" style="text-align:center">
						<br/><br/><input type="submit" name="clientes" value="<?php echo BUTTONCLIENTES; ?>" style="font-family:monospace;">
			</form>

			<form method="post" action="buscar_coche.php" style="text-align:center">
						<br/><br/><input type="submit" name="buscar_coche" value="<?php echo BUTTONBUSCCOCHE; ?>" style="font-family:monospace;">
			</form>
			<br/>
		<h3 style="text-align:Center; font-family:monospace;"> <?php echo TITLELISTA; ?> </h3><br/>
		<div class="listas" style="text-align:center;">
			<a href="lista_coches.php" style="font-family:monospace; text-decoration:none;"><?php echo ENLLASCOCHES; ?> </a><br/><br/>
			<a href="lista_clientes.php" style="font-family:monospace; text-decoration:none;"><?php echo ENLLASCLIENT; ?> </a>
		</div>
	</body>
	

</html>