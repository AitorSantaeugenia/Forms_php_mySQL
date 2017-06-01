<?php

class Coche 
{
	//atributos
    private $numPuertas = 0;
    private $potencia = 0;
	private $marca = "";
	private $model =" ";
	private $numPlaca =0;
	private $automatica = true;
	private $tipoTerreno = " ";
	private $descapotable  = true;
   
   
   //métodos
		//Puertas
		public function getNumPuertas() 
		{
			return  $this->numPuertas;
		}
		
		public function setNumPuertas($n) 
		{
			$this->numPuertas=(int)substr($n, 0, 2);
		}
		
		//Potencia
		public function getNumPotencia() 
		{
			return  $this->potencia;
		}
		
		public function setNumPotencia($n) 
		{
			$this->potencia=substr($n, 0, 4);
		}
		
		//Marca
		public function getNumMarca() 
		{
			return  $this->marca;
		}
		
		public function setNumMarca($n) 
		{
			$this->marca=substr($n, 0, 15);
		}
		
		//Model
		public function getNumModel() 
		{
			return  $this->model;
		}
		
		public function setNumModel($n) 
		{
			$this->model=substr($n, 0, 15);
		}
		
		//Numero placa
		public function getNumPlaca() 
		{
			return  $this->numPlaca;
		}
		
		public function setNumPlaca($n) 
		{
			$this->numPlaca=substr($n, 0, 10);
		}
				
		//Automatica
		public function getNumAutomatica() 
		{
			return  $this->automatica;
		}
		
		public function setNumAutomatica($n) 
		{
			$this->automatica=substr($n, 0, 1);
		}	

		//Numero placa
		public function getTerreno() 
		{
			return  $this->tipoTerreno;
		}
		
		public function setTerreno($n) 
		{
			$this->tipoTerreno=substr($n, 0, 10);
		}	

		//Descapotable si no
		public function getisdescapotable() 
		{
			return  $this->descapotable;
		}
		
		public function setisdescapotable($n) 
		{
			$this->descapotable=substr($n, 0, 1);
		}		

		
		
}
?>