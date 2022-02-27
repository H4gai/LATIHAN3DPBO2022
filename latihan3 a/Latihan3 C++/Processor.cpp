#include <iostream>
#include <string>

using namespace std;

class Processor{
    
    // deklarasi dan inisialisasi atribut private
    private:
		string name ="";
        int price = 0;

    public:

        // constructor tanpa parameter
        Processor(){
            
        }

        // constructor dengan parameter
        Processor(string Pname, int Pprice){
			this->name = Pname;
            this->price = Pprice;
        }

        // deklarasi setter sebagai method (Write)
		void setPrname(string Pname){
            this->name = Pname;
        }
		
        void setPrprice(int Pprice){
            this->price = Pprice;
        }

        // deklarasi getter sebagai method (Read Only)
		string getPrname(){
            return this->name;
        }
		
        int getPrprice(){
            return this->price;
        }


        // destructor
        ~Processor(){
            
        }

};