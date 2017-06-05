<?php
//------------------------------------------------------------
	include("conexion_php.php");
	
	//$results = mysql_query("SELECT * FROM clientes");
	$sql="SELECT * FROM coches";
	
	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Consulta no válida: ' . mysqli_error());
	}

	
	//----------------------------------------------------------------------
	include("session_idioma.php");
	//----------------------------------------------------------------------
?>

<html>
<head>
	<style>
		.tabla{
			border:1px solid black;
			padding: 3px;
			font-family: monospace;
			width:100%;
		}
		
		.tabla td {
			border:1px solid black;
			margin: 0 auto;
			text-align:center;
		}
		
		.tabla a{
			margin: 0 auto;
			text-align:center;
			text-decoration: none;
		}
		
	</style>
</head>
    <body>
	<div class="header">
			<form method="post" action="lista_coches.php" style="text-align:right; font-family:monospace";>
				<?php echo SELECTLANG; ?><select  name="idioma" width="173" style="width: 173px" id="idioma" onChange="document.location.href='lista_coches.php?idioma=' + this.value" />
										 <option value="es" <?php if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == "es") echo "selected"; ?>><?php echo NOMIDIOMAUN; ?></option>
										 <option value="ca" <?php if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == "ca") echo "selected"; ?> ><?php echo NOMIDIOMADOS; ?></option>
										 <option value="en" <?php if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == "en") echo "selected"; ?> ><?php echo NOMIDIOMATRES; ?></option>
				</select><br/>
			</form>
	</div>
	
    <table class="tabla">
        <thead>
		
            <tr >
                <td >ID</td>
                <td><?php echo MARCATAB; ?></td>
				<td><?php echo MODELTAB; ?></td>
				<td><?php echo NPLACATAB; ?></td>
				<td><?php echo NPORTESTAB; ?></td>
				<td><?php echo CAPOTATAB; ?></td>
				<td><?php echo TERRENOTAB; ?></td>
				<td><?php echo AUTOMTAB; ?></td>
				<td><?php echo POTENCIATAB; ?></td>
				<td><?php echo CLIENTIDTAB; ?></td>
            </tr>
        </thead>
		
        <tbody>
		<?php
		foreach($resultado as $item){
		
		?>
		  <tr>
            <td><?php echo $item['id']?></td>
            <td><?php echo $item['marca']?></td>
			<td><?php echo $item['model']?></td>
			<td><?php echo $item['numPuerta']?></td>
			<td><?php echo $item['numPlaca']?></td>
			<td><?php echo $item['automatica']?></td>
			<td><?php echo $item['tipoTerreno']?></td>
			<td><?php echo $item['descapotable']?></td>
			<td><?php echo $item['potencia']?></td>
			<td><?php echo $item['cliente_id']?></td>
			<td><?php echo "<a href='eliminar_coche.php?id=". $item['id']."'>".ELIMINAR."</a><br/> <br/> ";?></td>
			<td><?php echo "<a href='exercici_formulari.php?id=". $item['id']."'>".UPDATE."</a><br/> <br/> ";?></td>
			
          </tr>
        <?php
		}
		mysqli_close($conn);
        ?>
		
        </tbody>
    </table>
	<br/>
	<!-- FORM PER RETORNAR A LA PAGINA INICIAL -->
	<A href="exercici_formulari.php"> <?php echo RETURNCOCH;?></A>
	
	
			<form method="post" action="exercici_formulari.php" style="text-align:center; font-family:monospace;">
			<?php
					echo "<input type='submit' name='volver' style='font-family:monospace;' value='".RETURNCOCH."'><br/><br/>"; 
			?>
			</form>
    </body>
</html>