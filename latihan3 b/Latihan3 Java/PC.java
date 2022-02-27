class PC{
	
	// deklarasi dan inisialisasi atribut private
		private Processor prdata;
		private Disk dsdata;
		private RAM rmdata;
		private int totalprice;

        // constructor tanpa parameter
         public PC(){
            
        }

        // constructor dengan parameter
        public PC(Processor prdata, Disk dsdata, RAM rmdata, int pcprice ){
            this.prdata = prdata;
            this.dsdata = dsdata;
			this.rmdata = rmdata;
			this.totalprice = pcprice;
        }

        // deklarasi setter sebagai method (Write)
        public void setprocessor(Processor prdata){
            this.prdata = prdata;
        }
        public void setdisk(Disk dsdata){
            this.dsdata = dsdata;
        }
		public void setram(RAM rmdata){
            this.rmdata = rmdata;
        }
		public void settotalprice(int Prprice, int Dsprice, int Rmprice){
            this.totalprice = Prprice + Dsprice + Rmprice;
        }

        // deklarasi getter sebagai method (Read Only)
        public Processor getprocessor(){
            return this.prdata;
        }
        public Disk getdisk(){
            return this.dsdata;
        }
		public RAM getram(){
            return this.rmdata;
        }
		
		public int gettotalprice(){
            return this.totalprice;
        }
}
		
		
	