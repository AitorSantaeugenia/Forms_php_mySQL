<?php
//------------------------------------------------------------
	include("conexion_php.php");
	
	//$results = mysql_query("SELECT * FROM clientes");
	$sql="SELECT * FROM clientes";
	
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
	<table class="tabla">
        <thead>
		
            <tr>
                <td >ID</td>
                <td>NOMBRE</td>
				<td>APELLIDO</td>
				<td>DNI</td>
            </tr>
        </thead>
		
        <tbody>
		<?php
		foreach($resultado as $item){
		
		?>
		  <tr>
            <td><?php echo $item['id']?></td>
            <td><?php echo $item['nombre']?></td>
			<td><?php echo $item['apellido']?></td>
			<td><?php echo $item['dni']?></td>
			<td><?php echo "<a href='eliminar_cliente.php?id=". $item['id']."'>Eliminar</a><br/> <br/> ";?></td>
			<td><?php echo "<a href='exercici_formulari_clientes.php?id=". $item['id']."'>Update</a><br/> <br/> ";?></td>
			
          </tr>
        <?php
		}
		mysqli_close($conn);
        ?>
		
        </tbody>
    </table>
	<br/>
	<!-- FORM PER RETORNAR A LA PAGINA INICIAL -->
			<form method="post" action="exercici_formulari_clientes.php" style="text-align:center; font-family:monospace;">
			<?php
					echo "<input type='submit' name='volver' style='font-family:monospace;' value='Volver a clientes'><br/><br/>"; 
			?>
			</form>
    </body>
</html>