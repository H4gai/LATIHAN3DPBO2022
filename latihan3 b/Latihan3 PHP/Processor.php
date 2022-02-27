<?php

class Processor
{ 
	/*kelas yang digunakan untuk mengimplementasikan Processor/
	/*atribut Processor*/
		
		private $name = "";		//name
		private $price = 0;		//price
	
		public function __construct($name ="", $price = 0){
		/*costructor*/
		
			$this->name = $name;
			$this->price = $price;
		}
	
	/*mengeset nilai name*/
	public function setname($name)
	{
		$this->name = $name;
	}
	
	/*mengeset nilai price*/
	public function setprice($price)
	{
		$this->price = $price;
	}
	
	/*mengembalikan nilai name*/
	public function getname()
	{
		return $this->name;
	}
	
	/*mengembalikan nilai price*/
	public function getprice()
	{
		return $this->price;
	}
	
	function __destruct(){
		/*desstructor*/
		}
}
?>