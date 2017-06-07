<!DOCTYPE html5>
<?php
	include("./conexio/conexion_php.php");
	include("./session/session_idioma.php");
?>
<html>
    <head>

	</head>
	
		<style>
			.tabla{
				
				padding: 3px;
				font-family: monospace;
				width:80%;
			}
			
			.tabla td {
				border:1px solid black;
				margin: 0 auto;
				text-align:center;
			}
			
			.tabla a{
				margin: auto;
				text-align:center;
				text-decoration: none;
			}
			
			.testing{
				
				height:50px;
				border:0px solid transparent;
			}
			
			td.testing{
				border:0px solid transparent;
			}
			
			.center_Table{
				text-align:center;
				margin-left:15%;
			}	
		</style>
		
	<body>
	<!-- 
		Exercici#2 PROTECTORA DE ANIMALES | index.php per mirar cans
			
	-->
	<?php
		//echo "GET: ";print_r($_GET);
		//echo "<br/>"."POST: ";print_r($_POST);
		//echo "<br/>"."SESSION: ";print_r($_SESSION);
		
	$id="";
	if(isset($_GET['id']) && $_GET['id'] > 0){
		$id = (int)$_GET['id'];
	}
	?>
	<div class="header">
			<form method="post" style="text-align:right; font-family:monospace";>
				<?php echo SELECTLANG; ?><select  name="idioma" width="173" style="width: 173px" id="idioma" onChange="javascript:document.location.href='<?php echo $_SERVER['PHP_SELF'];?>?idioma=' + this.value + '&id=<?php echo $id;?>' " />
										 <option value="es" <?php if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == "es") echo "selected"; ?>><?php echo NOMIDIOMAUN; ?></option>
										 <option value="ca" <?php if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == "ca") echo "selected"; ?> ><?php echo NOMIDIOMADOS; ?></option>
										 <option value="en" <?php if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == "en") echo "selected"; ?> ><?php echo NOMIDIOMATRES; ?></option>
				</select><br/>
			</form>
	</div>
	
	<?php
	
	//$results = mysql_query("SELECT * FROM clientes");
	$sql="SELECT * FROM animales WHERE id_propietario=0";
	
	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Consulta no válida: ' . mysqli_error());
	}
	

	?>
	<!-- INICI BODY -->
	<h1 style="text-align:Center"> <?php echo TITLEPROCT; ?> </h1>
	<h2 style="text-align:Center"> <?php echo TITLEDOSPROCT; ?> </h2><br/>
		<div class="center_Table">
			<table class="tabla">
				<tbody>
				<?php
				
				foreach($resultado as $item){
				?>
					<tr>
						<td rowspan="8"><img src='<?php echo $item['imagen']?>' height="200" width="250"></td>
						<td>ID: <?php echo $item['id']?></td>
						<td rowspan="8"><?php echo "<a href='reserva.php?id=". $item['id']."'>ADOPTAR</a><br/> <br/> ";?></td>
						
					</tr>
					
					<tr>
						<td><?php echo ESPECIE; ?>: <?php echo $item['especie']?></td>
					</tr>
					
					<tr>
						<td><?php echo RAZA; ?>: <?php echo $item['raza']?></td>
					</tr>
					
					<tr>
						<td><?php echo EDAD; ?>: <?php echo $item['edad']?> años</td>
					</tr>
					
					<tr>
						<td><?php echo ALTURA; ?>: <?php echo $item['altura']?> cm</td>
					</tr>
					
					<tr>
						<td><?php echo PESO; ?>: <?php echo $item['peso']?> kg</td>
					</tr>
					
					<tr>
						<td><?php echo COLOR; ?>: <?php echo $item['color']?></td>
					</tr>
					
					<tr>
						<td><?php echo TIPOCOMIDA; ?>: <?php echo $item['tipo_comida']?></td>
					</tr>
					
					<tr>
						<td class="testing" colspan="2"></td>
					</tr>
					

				<?php
				
				}
				
				mysqli_close($conn);
				?>

			</table>
		</div>
		
	</body>
	<!-- FI BODY -->

</html>