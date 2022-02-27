from Processor import Processor
from Disk import Disk
from RAM import RAM
from PC import PC

#instalasi Objek dan mengisi data menggunakan setter
#Processor
prdata = Processor()
prdata.setname("AMD Ryzen 5")
prdata.setprice(3000000)

#Disk
dsdata = Disk()
dsdata.settype("SSD")
dsdata.setcapacity(1)
dsdata.setprice(1500000)

#RAM
rmdata = RAM()
rmdata.setcapacity(8)
rmdata.setprice(4000000)

#PC
pc = PC()
pc.setprocessor(prdata)
pc.setdisk(dsdata)
pc.setram(rmdata)
pc.settotal(prdata.getprice(), dsdata.getprice(), rmdata.getprice());

#get nilai yang ada pada objek data keseluruhan
print("--- data PC  ---")
print("-----------------------------")
print("Deskripsi :")
print("Processor Name	: "+ str(pc.getprocessor().getname()))
print("Processor Price	: Rp "+ str(pc.getprocessor().getprice()))
print("Disk Type	: "+ str(pc.getdisk().gettype()))
print("Disk Price 	: Rp "+ str(pc.getdisk().getprice()))
print("Disk Capacity 	: "+ str(pc.getdisk().getcapacity())+" TB")
print("RAM Capacity`	: "+ str(pc.getram().getcapacity()) +" GB")
print("RAM Price 	: Rp "+ str(pc.getram().getprice()))
print("Total Price pc 	: Rp " + str(pc.gettotal()))

