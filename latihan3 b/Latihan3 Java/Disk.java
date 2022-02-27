class Disk
{ 

/*kelas yang digunakan untuk mengimplementasikan Disk/
/*atribut Disk*/
		
		private String type;		//type disk
		private int capacity;		//capacity
		private int price;			//disk price
	
		
		
		public Disk(){
		/*costructor*/
		}
		
		 // constructor dengan parameter
        public Disk(String type, int capacity, int Dsprice){
            this.type = type;
            this.capacity = capacity;
			this.price = Dsprice;
        }
	
	/*mengeset nilai type*/
	public void settype(String type)
	{
		this.type = type;
	}
	/*mengeset nilai capacity*/
	public void setcapacity(int capacity)
	{
		this.capacity = capacity;
	}
	/*mengeset nilai price*/
	public void setDsprice(int Dsprice)
	{
		this.price = Dsprice;
	}

	/*mengembalikan nilai type*/
	String gettype()
	{
		return this.type;
	}
	/*mengembalikan nilai capacity*/
	int getcapacity()
	{
		return this.capacity;
	}
	/*mengembalikan nilai price*/
	int getDsprice()
	{
		return this.price;
	}
}