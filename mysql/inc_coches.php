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
		
		$sql3="SELECT * FROM coches";
		
		//print_r($_POST["cliente_id_form"]);
		//print_r($_SESSION['idcoche']);
				
		$resultado3 = mysqli_query($conn,$sql3);

		if (!$resultado3) {
			die('Consulta no válida: ' . mysqli_error());
		}
		
?>

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
		foreach($resultado3 as $items)
		{
		
		?>
		  <tr>
            <td><?php echo $items['id']?></td>
            <td><?php echo $items['marca']?></td>
			<td><?php echo $items['model']?></td>
			<td><?php echo $items['numPuerta']?></td>
			<td><?php echo $items['numPlaca']?></td>
			<td><?php echo $items['automatica']?></td>
			<td><?php echo $items['tipoTerreno']?></td>
			<td><?php echo $items['descapotable']?></td>
			<td><?php echo $items['potencia']?></td>
			<td><?php echo $items['cliente_id']?></td>
			
          </tr>
        <?php
		}
			
        ?>
		
        </tbody>
    </table>