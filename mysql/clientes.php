<?php
/* CLIENTES.PHP */
class Cliente {
	//atributos
    private $nombre = " ";
	private $apellido = " ";
	private $dni = " ";

   
   
   //métodos
		//Puertas
		public function getNombre() 
		{
			return  $this->nombre;
		}
		
		public function setNombre($n) 
		{
			$this->nombre=substr($n, 0, 25);
		}
		
		//Potencia
		public function getApellido() 
		{
			return  $this->apellido;
		}
		
		public function setApellido($n) 
		{
			$this->apellido=substr($n, 0, 25);
		}
		
		//Marca
		public function getdni() 
		{
			return  $this->dni;
		}
		
		public function setdni($n) 
		{					
				$letra = substr($n, -1);
				$numeros = (int)substr($n, 0, -1);
					if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
						$n = $n;
					}else{
						$n = " ";
					}
			$this->dni=substr($n, 0, 9);
			

		}		
}
?>