class main
{
	public static void main(String[] args){
	
	// instansi objek kelas Memory dengan memanggil constructor
	//memasukan data dengan set setiap kelas 
	
	//Precessor
	Processor prdata = new Processor();
	prdata.setPrname("AMD Ryzen 5");
	prdata.setPrprice(3000000);
	
	//RAM
	RAM rmdata = new RAM();
	rmdata.setRmcapacity(8);
	rmdata.setRmprice(4000000);
	
	//Disk
	Disk dsdata = new Disk();
	dsdata.settype("SSD");
	dsdata.setcapacity(1);
	dsdata.setDsprice(1500000);
	
	//PC
	PC pc = new PC();
	pc.setprocessor(prdata);
	pc.setdisk(dsdata);
	pc.setram(rmdata);
	pc.settotalprice(prdata.getPrprice(), dsdata.getDsprice(), rmdata.getRmprice());
	
	// deklarasi method Display untuk menampilkan data menggunakan method Getter
	System.out.println("===== Data PC ====="); 
	System.out.println("--------------------------------"); 
	System.out.println("Deskripsi :"); 
	System.out.println("Processor Name 	: " + pc.getprocessor().getPrname()); 
    System.out.println("Processor Price	: Rp " + pc.getprocessor().getPrprice()); 
	System.out.println("Type Disk      	: " + pc.getdisk().gettype()); 
    System.out.println("Disk Capacity  	: " + pc.getdisk().getcapacity()+" TB"); 
	System.out.println("Disk Price    	: Rp " + pc.getdisk().getDsprice());
    System.out.println("RAM Capacity   	: " + pc.getram().getRmcapacity() +" GB"); 
    System.out.println("RAM Price   	: Rp " + pc.getram().getRmprice()); 
	System.out.println("Total Price pc 	: Rp " + pc.gettotalprice()); 
	}

}

     