<?php
//CLASE ANIMAL
class Animal{
	//atributos
    private $especie = "";
	private $raza = "";
	private $peso = 0;
	private $edad = 0;
	private $altura = 0;
	private $tipo_comida ="";
	private $color ="";
	private $imagen ="";

   //MÈTODES
		//ESPECIE ---------------------------
		public function getEspecie() 
		{
			return  $this->especie;
		}
		
		public function setEspecie($n) 
		{
			$this->especie=substr($n, 0, 25);
		}
		//ESPECIE ---------------------------
		
		//RAZA ---------------------------
		public function getRaza() 
		{
			return  $this->raza;
		}
		
		public function setRaza($n) 
		{
			$this->raza=substr($n, 0, 25);
		}
		//RAZA ---------------------------
		
		//PESO ---------------------------
		public function getPeso() 
		{
			return  $this->peso;
		}
		
		public function setPeso($n) 
		{
			$this->peso;
		}
		//PESO ---------------------------
		
		//EDAD ---------------------------
		public function getEdad() 
		{
			return  $this->edad;
		}
		
		public function setEdad($n) 
		{
			$this->edad=substr($n, 0, 2);
		}
		//EDAD ---------------------------
		
		//ALTURA ---------------------------
		public function getAltura() 
		{
			return  $this->altura;
		}
		
		public function setAltura($n) 
		{
			$this->altura;
		}
		//ALTURA ---------------------------
		
		//TIPO_COMIDA ---------------------------
		public function getTipocomida() 
		{
			return  $this->tipo_comida;
		}
		
		public function setTipocomida($n) 
		{
			$this->tipo_comida=substr($n, 0, 30);
		}
		//TIPO_COMIDA ---------------------------
		
		//COLOR ---------------------------
		public function getColor() 
		{
			return  $this->color;
		}
		
		public function setColor($n) 
		{
			$this->color=substr($n, 0, 15);
		}
		//COLOR ---------------------------
				
		//IMAGEN (URL) ---------------------------
		public function getImagen() 
		{
			return  $this->imagen;
		}
		
		public function setImagen($n) 
		{
			$this->imagen=substr($n, 0, 250);
		}
		//IMAGEN (URL) ---------------------------
		
		
		
		
		
}
?>