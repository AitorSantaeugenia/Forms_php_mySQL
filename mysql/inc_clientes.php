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

	<?php
	//include("conexion_php.php");
	//include("session_idioma.php");

	//$activate_LAST_form = true;
			//UPDATE coches SET cliente_id=35 WHERE id=39
			$resultado3 = "";
			$items = "";
			
			$sql3="SELECT * FROM clientes";
			
			//print_r($_POST["cliente_id_form"]);
			//print_r($_SESSION['idcoche']);
					
			$resultado3 = mysqli_query($conn,$sql3);

			if (!$resultado3) {
				die('Consulta no válida: ' . mysqli_error());
			}
			
	?>

	<table class="tabla">
			<thead>
			
				<tr>
					<td >ID</td>
					<td><?php echo NAMETAB; ?></td>
					<td><?php echo SURNAMETAB; ?></td>
					<td><?php echo DNITAB; ?></td>
				</tr>
			</thead>
			
			<tbody>
			<?php
			foreach($resultado3 as $items){
			
			?>
			  <tr>
				<td><?php echo $items['id']?></td>
				<td><?php echo $items['nombre']?></td>
				<td><?php echo $items['apellido']?></td>
				<td><?php echo $items['dni']?></td>			
			  </tr>
			<?php
			}
		
			?>
			
			</tbody>
	</table>