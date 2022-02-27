class Processor():
#kelas yang digunakan untuk mengimplementasikan Processor
#atribut Processor
	

	name = ""		#name
	price = 0		#price
	
	def __init__(self, name="", price = 0):
	#costructor
		self.name = name
		self.price = price
        
    #mengeset nilai name
	def setname(self, name):
		self.name = name
	
	#mengeset nilai price
	def setprice(self, price):
		self.price = price
        
    #mengembalikan nilai name
	def getname(self):
		return self.name   

	#mengembalikan nilai price
	def getprice(self):
		return self.price

	
	