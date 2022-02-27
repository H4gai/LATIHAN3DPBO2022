<?php

include "Processor.php";
include "Disk.php";
include "RAM.php";


class PC
{ 
	/*kelas yang digunakan untuk mengimplementasikan PC/
	/*atribut PC*/
		
		private $prdata;		//Processor data
		private $dsdata;		//Disk data
		private $rmdata;		//RAM data
		private $totalprice = 0;//total price pc
		
	
		public function __construct(){
		/*costructor*/
		
			$this->prdata = new Processor();
			$this->dsdata = new Disk;
			$this->rmdata = new RAM;
			$this->totalprice = 0;
			
		}
	
	/*mengeset nilai Processor*/
	public function setprocessor($prdata)
	{
		$this->prdata = $prdata;
	}
	
	/*mengeset nilai Disk*/
	public function setdisk($dsdata)
	{
		$this->dsdata = $dsdata;
	}
	
	/*mengeset nilai RAM*/
	public function setram($rmdata)
	{
		$this->rmdata = $rmdata;
	}
	
	/*mengeset nilai Total Price*/
	public function settotal($pprice, $dprice, $rprice)
	{
		$this->totalprice = $pprice + $dprice + $rprice;
	}
	
	/*mengembalikan nilai Processor*/
	public function getprocessor()
	{
		return $this->prdata;
	}
	
	/*mengembalikan nilai Disk*/
	public function getdisk()
	{
		return $this->dsdata;
	}
	
	/*mengembalikan nilai RAM*/
	public function getram()
	{
		return $this->rmdata;
	}
	
	/*mengembalikan nilai Total Price*/
	public function gettotal()
	{
		return $this->totalprice;
	}
	
	function __destruct(){
		/*desstructor*/
		}
}
?>