<style>
		p{
			font-family: monospace;
			text-align:center;
		}
		a{
			font-family: monospace;
			text-align:center;
		}
		
		.test_center2{
			font-family: monospace;
			text-align:center;
		}
</style>
<?php 
	include("conexion_php.php");
	include("session_idioma.php");
		//$activate_LAST_form = true;
		//UPDATE coches SET cliente_id=35 WHERE id=39
		
		$sql3="UPDATE coches SET cliente_id='".$_SESSION['id_cliente']."' WHERE id=".$_SESSION['idcoche'];
		
		//print_r($_POST["cliente_id_form"]);
		//print_r($_SESSION['idcoche']);
				
		$resultado3 = mysqli_query($conn,$sql3);

		if (!$resultado3) {
			die('Consulta no válida: ' . mysqli_error());
		}
		
		//print_r($_SESSION['idcoche']);
		//print_r($_SESSION['id_cliente']);
		echo"<br/>";
		echo"<br/>";
		echo "<p>".VICTORY."</p>";
		echo "<div class='test_center2'>";
		echo "<a href='index.php'>".BACKTOMENU."</a><br/> <br/>";
		echo "</div>";
?>