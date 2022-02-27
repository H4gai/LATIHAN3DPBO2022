class RAM():
#kelas yang digunakan untuk mengimplementasikan RAM
#atribut RAM
	

	Rcapacity = 0	#capacity
	Rprice = 0		#price
	
	def __init__(self, Rcapacity=0, Rprice = 0):
	#costructor
		self.Rcapacity = Rcapacity
		self.Rprice = Rprice
        
    #mengeset nilai capacity
	def setcapacity(self, Rcapacity):
		self.Rcapacity = Rcapacity
	
	#mengeset nilai price
	def setprice(self, Rprice):
		self.Rprice = Rprice
        
    #mengembalikan nilai capacity
	def getcapacity(self):
		return self.Rcapacity   

	#mengembalikan nilai price
	def getprice(self):
		return self.Rprice

	
	