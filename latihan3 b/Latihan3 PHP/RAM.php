<?php

class RAM
{ 
	/*kelas yang digunakan untuk mengimplementasikan RAM/
	/*atribut RAM*/
		
		private $capacity = "";		//capacity
		private $Rprice = 0;		//Rprice
	
		public function __construct($capacity ="", $Rprice = 0){
		/*costructor*/
		
			$this->capacity = $capacity;
			$this->Rprice = $Rprice;
		}
	
	/*mengeset nilai capacity*/
	public function setcapacity($capacity)
	{
		$this->capacity = $capacity;
	}
	
	/*mengeset nilai Rprice*/
	public function setRprice($Rprice)
	{
		$this->Rprice = $Rprice;
	}
	
	/*mengembalikan nilai capacity*/
	public function getcapacity()
	{
		return $this->capacity;
	}
	
	/*mengembalikan nilai Rprice*/
	public function getRprice()
	{
		return $this->Rprice;
	}
	
	function __destruct(){
		/*desstructor*/
		}
}
?>