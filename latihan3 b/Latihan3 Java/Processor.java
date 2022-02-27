class Processor
{
    
    // deklarasi dan inisialisasi atribut private
		private String name;
		private int price;


        // constructor tanpa parameter
        public Processor(){
            
        }

        // constructor dengan parameter
        public Processor(String Pname, int Pprice){
			this.name = Pname;
            this.price = Pprice;
        }

        // deklarasi setter sebagai method (Write)
		public void setPrname(String Pname){
            this.name = Pname;
        }
		
        public void setPrprice(int Pprice){
            this.price = Pprice;
        }

        // deklarasi getter sebagai method (Read Only)
		String getPrname(){
            return this.name;
        }
		
        int getPrprice(){
            return this.price;
        }
            
}

