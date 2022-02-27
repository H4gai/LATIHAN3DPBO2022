#include <iostream>
#include "PC.cpp"

using namespace std;

int main(){
	
	// instansi objek kelas Memory dengan memanggil constructor
	//memasukan data dengan set setiap kelas 
	
	//Processor
	Processor prdata;
	prdata.setPrname("AMD Ryzen 5");
	prdata.setPrprice(3000000);
	
	//RAM
	RAM rmdata;
	rmdata.setRmcapacity(8);
	rmdata.setRmprice(4000000);
	
	//Disk
	Disk dsdata;
	dsdata.settype("SSD");
	dsdata.setcapacity(1);
	dsdata.setDsprice(1500000);
	
	//Pc
	PC pc;
	pc.setprocessor(prdata);
	pc.setdisk(dsdata);
	pc.setram(rmdata);
	pc.settotalprice(prdata.getPrprice(), dsdata.getDsprice(), rmdata.getRmprice());
	
	// deklarasi method Display untuk menampilkan data menggunakan method Getter
	cout << "===== DATA PC =====" << endl;
	cout << "-------------------------------------" << endl;
	cout << "Deskripsi :" << endl;
	cout << "Processor Name 	: " << pc.getprocessor().getPrname() << endl; 
    cout << "Processor Price	: Rp " << pc.getprocessor().getPrprice() << endl; 
	cout << "Type Disk      	: " << pc.getdisk().gettype() << endl; 
    cout << "Disk Capacity  	: " << pc.getdisk().getcapacity() << " TB" << endl; 
	cout << "Disk Price    	: Rp " << pc.getdisk().getDsprice() << endl;
    cout << "RAM Capacity   	: " << pc.getram().getRmcapacity() << " GB" << endl; 
    cout << "RAM Price   	: Rp " << pc.getram().getRmprice() << endl; 
	cout << "Total Price pc 	: Rp " << pc.gettotalprice() << endl; 

}

     