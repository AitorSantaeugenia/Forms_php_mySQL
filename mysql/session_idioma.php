<?php
		session_start();
		
		if (isset($_GET['idioma'])){
			$_SESSION['idioma'] = $_GET["idioma"];
		}
		
		if(!isset($_SESSION['idioma'])){
			$_SESSION['idioma'] = 'es';
		}
		
		if ($_SESSION['idioma']=='es'){
					include ('constantes_es.php');
			}else if ($_SESSION['idioma']=='en'){
					include ('constantes_en.php');
			}else if ($_SESSION['idioma']=='ca'){
					include ('constantes_ca.php');
		}
		

		
?>