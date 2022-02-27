<?php

// import file kelas Memori
include "PC.php";

	// instansi objek kelas Memory dengan memanggil constructor
	$prdata = new Processor();
	$dsdata = new Disk();
	$rmdata = new RAM();
	$pc = new PC();
	
	
	//memasukan data dengan set setiap kelas 
	//processor
	$prdata->setname("AMD Ryzen 5");
	$prdata->setprice(3000000);
	
	//Ram
	$rmdata->setcapacity(8);
	$rmdata->setRprice(4000000);
	
	//disk
	$dsdata->settype("SSD");
	$dsdata->setcapacity(1);
	$dsdata->setDprice(1500000);
	
	$pc->settotal($prdata->getprice(), $dsdata->getDprice(), $rmdata->getRprice());
	
	//get nilai yang ada pada objek data keseluruhan
	echo "--- data PC ---"."<br>";
	echo "-----------------------------"."<br>";
	echo "Deskripsi :"."<br>";
	echo "Processor Name	: ". $prdata->getname()."<br>";
	echo "Processor Price	: Rp ". $prdata->getprice()."<br>";
	echo "Disk Type			: ". $dsdata->gettype()."<br>";
	echo "Disk Capacity  	: ". $dsdata->getcapacity()." TB"."<br>";
	echo "Disk Price	: Rp ". $dsdata->getDprice()."<br>";
	echo "RAM Capacity	: ". $rmdata->getcapacity()." GB"."<br>";
	echo "RAM Price 	: Rp ". $rmdata->getRprice()."<br>";
	echo "Total Price	: Rp ". $pc->gettotal()."<br>";
	
	
?>