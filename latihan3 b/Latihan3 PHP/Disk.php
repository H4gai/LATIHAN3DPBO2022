<?php

class Disk
{ 
	/*kelas yang digunakan untuk mengimplementasikan Disk/
	/*atribut Disk*/
		
		private $type = "";		//type
		private $capacity = 0;	//capacity
		private $Dprice = 0;	//Dprice
	
		public function __construct($type ="", $capacity = 0, $Dprice = 0){
		/*costructor*/
		
			$this->type = $type;
			$this->capacity = $capacity;
			$this->Dprice = $Dprice;
		}
	
	/*mengeset nilai type*/
	public function settype($type)
	{
		$this->type = $type;
	}
	
	/*mengeset nilai capacity*/
	public function setcapacity($capacity)
	{
		$this->capacity = $capacity;
	}
	
	/*mengeset nilai Dprice*/
	public function setDprice($Dprice)
	{
		$this->Dprice = $Dprice;
	}
	
	/*mengembalikan nilai type*/
	public function gettype()
	{
		return $this->type;
	}
	
	/*mengembalikan nilai capacity*/
	public function getcapacity()
	{
		return $this->capacity;
	}
	
	/*mengembalikan nilai Dprice*/
	public function getDprice()
	{
		return $this->Dprice;
	}
	
	function __destruct(){
		/*desstructor*/
		}
}
?>