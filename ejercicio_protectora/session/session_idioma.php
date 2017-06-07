<?php

		session_start();
		
		if (isset($_GET['idioma'])){
			$_SESSION['idioma'] = $_GET["idioma"];
		}
		
		if(!isset($_SESSION['idioma'])){
			$_SESSION['idioma'] = 'es';
		}
		
		if ($_SESSION['idioma']=='es'){
					include ('/lang/constantes_es.php');
			}else if ($_SESSION['idioma']=='en'){
					include ('/lang/constantes_en.php');
			}else if ($_SESSION['idioma']=='ca'){
					include ('/lang/constantes_ca.php');
		}
		

		
?>