class RAM
{
    
    // deklarasi dan inisialisasi atribut private
    
        private int capacity;
        private int price;


        // constructor tanpa parameter
         public RAM(){
            
        }

        // constructor dengan parameter
         public RAM(int Rmcapacity, int Rmprice){
			this.capacity = Rmcapacity;
            this.price = Rmprice;
        }

        // deklarasi setter sebagai method (Write)
		 public void setRmcapacity(int Rmcapacity){
            this.capacity = Rmcapacity;
        }
         public void setRmprice(int Rmprice){
            this.price = Rmprice;
        }
       

        // deklarasi getter sebagai method (Read Only)
		int getRmcapacity(){
            return this.capacity;
        }
        int getRmprice(){
            return this.price;
        }

}