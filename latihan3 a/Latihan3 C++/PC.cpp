#include "Processor.cpp"
#include "Disk.cpp"
#include "RAM.cpp"

class PC{
	
	// deklarasi dan inisialisasi atribut private
	private:
		Processor prdata;
		Disk dsdata;
		RAM rmdata;
		int totalprice;
		
	 public:

        // constructor tanpa parameter
        PC(){
            
        }

        // constructor dengan parameter
        PC(Processor prdata, Disk dsdata, RAM rmdata){
            this->prdata = prdata;
            this->dsdata = dsdata;
			this->rmdata = rmdata;
			this->totalprice = prdata.getPrprice()+ dsdata.getDsprice() + rmdata.getRmprice();
        }

        // deklarasi setter sebagai method (Write)
        void setprocessor(Processor prdata){
            this->prdata = prdata;
        }
        void setdisk(Disk dsdata){
            this->dsdata = dsdata;
        }
		void setram(RAM rmdata){
            this->rmdata = rmdata;
        }
		void settotalprice(int Prprice, int Dsprice, int Rmprice){
            this->totalprice = Prprice + Dsprice + Rmprice;
        }

        // deklarasi getter sebagai method (Read Only)
        Processor getprocessor(){
            return this->prdata;
        }
        Disk getdisk(){
            return this->dsdata;
        }
		RAM getram(){
            return this->rmdata;
        }
		
		int gettotalprice(){
            return this->totalprice;
        }

        // destructor
        ~PC(){
		}
};
		
		
	