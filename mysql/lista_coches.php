<?php
//------------------------------------------------------------
	include("conexion_php.php");
	
	//$results = mysql_query("SELECT * FROM clientes");
	$sql="SELECT * FROM coches";
	
	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Consulta no válida: ' . mysqli_error());
	}

	
	
?>

<html>
    <body>
    <table style="border:1px solid black">
        <thead>
		
            <tr>
                <td >ID</td>
                <td>MARCA</td>
				<td>MODELO</td>
				<td>NUM. PUERTAS</td>
				<td>NUM. PLACA</td>
				<td>AUTOMATICA?</td>
				<td>TERRENO</td>
				<td>DESCAPOTABLE</td>
				<td>POTENICA</td>
				<td>CLIENTE ID</td>
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
			<td><?php echo "<a href='eliminar_coche.php?id=". $item['id']."'>Eliminar</a><br/> <br/> ";?></td>
			<td><?php echo "<a href='exercici_formulari.php?id=". $item['id']."'>Update</a><br/> <br/> ";?></td>
			
          </tr>
        <?php
		}
		mysqli_close($conn);
        ?>
		
        </tbody>
    </table>
	<br/>
	<!-- FORM PER RETORNAR A LA PAGINA INICIAL -->
			<form method="post" action="exercici_formulari.php">
			<?php
					echo "<input type='submit' name='volver' value='Volver a coches'><br/><br/>"; 
			?>
			</form>
    </body>
</html>