<?php
	include("../conexio/conexion_php.php");
	//$results = mysql_query("SELECT * FROM clientes");
	$sql="SELECT * FROM animales";
	
	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Consulta no válida: ' . mysqli_error());
	}
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
				margin: auto;
				text-align:center;
				text-decoration: none;
			}
			
		</style>
	</head>
    <body>
		<div class="header">

		</div>
		
		<!-- INICI TAULA PER ELS VALORS DELS ANIMALS -->
		<table class="tabla">
			<thead>
			
				<tr>
					<td >ID</td>
					<td> Especie</td>
					<td> Raza</td>
					<td> Edad</td>
					<td> Altura</td>
					<td> Peso</td>
					<td> Color</td>
					<td> Tipo comida</td>
					<td> Imagen</td>
					<td> ID propietario</td>
				</tr>
			</thead>
			
			<tbody>
			<?php
			
			foreach($resultado as $item){
			
			?>
			  <tr>
				<td><?php echo $item['id']?></td>
				<td><?php echo $item['especie']?></td>
				<td><?php echo $item['raza']?></td>
				<td><?php echo $item['edad']?></td>
				<td><?php echo $item['altura']?></td>
				<td><?php echo $item['peso']?></td>
				<td><?php echo $item['color']?></td>
				<td><?php echo $item['tipo_comida']?></td>
				<td><?php echo $item['imagen']?></td>
				<td><?php echo $item['id_propietario']?></td>
				<td><?php echo "<a href='../eliminar/animales/eliminar_animal.php?id=". $item['id']."'>ELIMINAR</a><br/> <br/> ";?></td>
				<td><?php echo "<a href='../nuevos/nuevo_animal.php?id=". $item['id']."'>UPDATE</a><br/> <br/> ";?></td>
				
			  </tr>
			<?php
			}
			mysqli_close($conn);
			?>
			
			</tbody>
		</table>
		<!-- INICI TAULA PER ELS VALORS DELS ANIMALS -->
		
		<br/>
		<!-- FORM PER AFEGIR ANIMAL -->
			<form method="post" action="../nuevos/nuevo_animal.php" style="text-align:center; font-family:monospace;">
			<?php
					echo "<input type='submit' name='volver' style='font-family:monospace;' value='NOU ANIMAL'><br/><br/>"; 
			?>
			</form>
		
		<!-- FORM PER RETORNAR A LA PAGINA INICIAL -->
				<form method="post" action="../index.php" style="text-align:center; font-family:monospace;">
				<?php
						echo "<input type='submit' name='volver' style='font-family:monospace;' value='INDEX'><br/><br/>"; 
				?>
				</form>
    </body>
</html>