from Processor import Processor
from Disk import Disk
from RAM import RAM

class PC():
#kelas yang digunakan untuk mengimplementasikan PC
#atribut PC

    prdata = Processor() #Processor data
    dsdata = Disk() #Disk data
    mdata = RAM()	#RAM data
    totalprice = 0  #total pc price
	
    def __init__(self, prdata = Processor(), dsdata = Disk(), rmdata = RAM(), totalprice = 0):
	#costructor
        self.prdata = prdata
        self.dsdata= dsdata
        self.rmdata = rmdata
        self.totalprice = totalprice
	
	#mengeset nilai processor
    def setprocessor(self, prdata):
        self.prdata = prdata
	
	#mengeset nilai Disk
    def setdisk(self, dsdata):
        self.dsdata = dsdata
	
	#mengeset nilai RAM
    def setram(self, rmdata):
        self.rmdata = rmdata
    
    #mengeset nilai totalprice
    def settotal(self, pprice, dprice, rprice):
        self.totalprice = pprice+dprice+rprice
     
	#mengembalikan nilai processor
    def getprocessor(self):
        return self.prdata
	
	#mengembalikan nilai Disk
    def getdisk(self):
        return self.dsdata

	#mengembalikan nilai RAM
    def getram(self):
        return self.rmdata
        
    #mengembalikan nilai total
    def gettotal(self):
        return self.totalprice
    

	
	