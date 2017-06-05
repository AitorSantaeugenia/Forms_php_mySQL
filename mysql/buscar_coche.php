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
		
		p{
			font-family: monospace;
			text-align:center;
		}
		
		a{
			font-family: monospace;
			text-align:center;
			text-decoration: none;
		}
		
		a.aderecha{
			margin-left:100px;
			text-align:center;
		}
		
		.centrado{
			font-family: monospace;
			text-align:center;
			border:1px solid transparent;
		}
		
		.comprar_coche{
			display:block;
		}
		
		.test_center{
			text-align:center;
		}
		
		
	</style>

	<?php
	include("conexion_php.php");
	include("session_idioma.php");
	//INICI QUERY ----------------------------------------------
	//$results = mysql_query("SELECT * FROM clientes");
	$valor_cliente="";
	//print_r($_POST);
	$resultado=null;
	$resultado2=null;
	$resultado4=null;
	$item2=null;
	$item=null;
	$test_cheats=null;
	
	
	if(isset($_POST["buscar_id"]) or isset($_GET['idcoche']))
	{
		if(isset($_POST["buscar_id"])){
			$valor_cliente = $_POST["buscar_id"];
		}else if (isset($_GET['idcoche'])){
			$valor_cliente = $_GET['idcoche'];
			$_SESSION['idcoche']= $valor_cliente;
		}
		
		
		//$_SESSION['id_cliente']=  $valor_cliente;
		
		$sql="SELECT * FROM coches WHERE id =".$valor_cliente;
	
		//print_r($_POST["buscar_id"]);
	
		$resultado = mysqli_query($conn,$sql);

		if (!$resultado) {
		die('Consulta no válida: ' . mysqli_error());
		}
	
		//print_r($_POST);
	}
	
	//PSEUDO TRAMPA ACTIVAR LAST FORM
	$activate_LAST_form = false;
	
	if(isset($_POST["cliente_id_form"])){
		
		$sql2="SELECT * FROM clientes WHERE id =".$_POST["cliente_id_form"];
		
		//print_r($_POST);
		
		$resultado2 = mysqli_query($conn,$sql2);

		if (!$resultado2) {
			die('Consulta no válida: ' . mysqli_error());
		}
	}	
	//print_r($_POST);
	//print_r($_SERVER['PHP_SELF']);
	//FI QUERY ----------------------------------------------
	
		//print_r($_GET['idcoche']);
if(!isset($_POST["buscar_id"]) && (!isset($_GET['idcoche'])) && (!isset($_POST['cliente_id_form'])))
{
	?>
	
	<div class="form_buscar">
		<form method="post" action="buscar_coche.php" style="text-align:right; font-family:monospace";>
						<?php echo BUTTONBUSCCOCHE; ?> <input type="text" style="margin: auto;" name="buscar_id" id="buscar_id" maxlength="15"/><br>
						<input type="submit" name="buscar" style="font-family:monospace;" value="Buscar">
		</form>
		
		<?php
			include("inc_coches.php");
		?>
	<!-- MOSTRAR COCHE -->
	<?php 
}else{
	
}

	if($resultado!=null){?>
		
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
		foreach($resultado as $item)
		{
		
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
			
          </tr>
        <?php
		}
			
        ?>
		
        </tbody>
    </table>
	<br/>
	<?php

	
	//PER IMPRIMIR CORRECTAMENT ELS RESULTATS SENSE CAP TIPUS DE TRAMAAPAAAAAA
	//print_r($item['id']);

		if(!$item['id'])
		{
			echo "<p>El coche no existe</p>";
		}
	
		if(isset($item['cliente_id']) && $item['cliente_id'] == 0 && isset($_POST['buscar_id']))
		{
			echo "<p>".COCHENOVEN; "</p>"; 
			echo "<p>".QUIERES; "</p>";
			echo "<div class='centrado'>";
			echo "<br/><a href='buscar_coche.php?idcoche=".$_POST['buscar_id']."' >".YES; "</a>";

				

			echo "<a href='index.php' class='aderecha'>".NO; "</a><br/> <br/>";
			echo "</div>";
			
		}else if(isset($item['cliente_id']) && $item['cliente_id'] > 0 ){
			echo "<p>Lo sentimos, este coche ya ha sido vendido</p>";
			
		}else{
			echo " ";
		}
	}
	?>
	<br/>
	<?php if(isset($_GET['idcoche'])){
		
			//$valor_cliente = $_GET['idcoche'];
			
			//echo($valor_cliente);
		?>
	<div class="comprar_coche">
		<form method="post" action="buscar_coche.php?id="<?php echo $valor_cliente; ?> style="text-align:right; font-family:monospace";>
				Buscar <strong>cliente</strong> por ID: <input type="text" style="margin: auto;" name="cliente_id_form" id="cliente_id_form" maxlength="15"/><br>
				<input type="submit" name="buscar" style="font-family:monospace;" value="Buscar">
		</form>
	</div>
	
	<?php 
	include("inc_clientes.php");
	}
	
	echo "<br/>";
	echo "<br/>";
	
	if($resultado2!=null ){
		//print_r($resultado2);
		?>
	<!-- MOSTRAR CLIENTE -->
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
		foreach($resultado2 as $item){
		
		?>
		  <tr>
            <td><?php echo $item['id']?></td>
            <td><?php echo $item['nombre']?></td>
			<td><?php echo $item['apellido']?></td>
			<td><?php echo $item['dni']?></td>			
          </tr>
        <?php
		}
	}
	//print_r($_GET);
	//print_r($_POST);
	//print_r($valor_cliente);


		
        ?>
		
        </tbody>
    </table>
	<?php
	if(!isset($_POST["buscar_id"]) && isset($_POST["cliente_id_form"]) && isset($_SESSION['idcoche'])){
	$_SESSION['id_cliente']=  $_POST["cliente_id_form"];

			echo "<div class='test_center'>";
				echo "<br/><br/>";
				echo "<a href='comprar_coche.php'>".COMPRAR."</a><br/><br/>";
			echo "</div>";
			
			
	}

	/*
	echo "POST -> ";print_r($_POST);
	echo "<br/>";
	echo "GET -> ";print_r($_GET);
	echo "<br/>";
	*/
	//print_r($_SESSION['idcoche']);
	//print_r($valor_cliente);
	//print_r($resultado3);
	mysqli_close($conn);
	?>
	
	</div>