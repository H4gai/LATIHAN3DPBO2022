class Disk():
#kelas yang digunakan untuk mengimplementasikan Disk
#atribut Disk
	
	type = ""       #type disk
	capacity = 0    #capacity
	Dprice = 0		#price
	
	def __init__(self, type ="", capacity = 0, Dprice = 0):
	#costructor
		self.type = type
		self.capacity = capacity
		self.Dprice = Dprice
	
	#mengeset nilai type
	def settype(self, type):
		self.type = type
	
	#mengeset nilai capacity
	def setcapacity(self, capacity):
		self.capacity = capacity
	
	#mengeset nilai price
	def setprice(self, Dprice):
		self.Dprice = Dprice
     
	#mengembalikan nilai type
	def gettype(self):
		return self.type
	
	#mengembalikan nilai capacity
	def getcapacity(self):
		return self.capacity

	#mengembalikan nilai price
	def getprice(self):
		return self.Dprice

	
	