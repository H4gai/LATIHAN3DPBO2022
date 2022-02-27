#include <iostream>
#include <string>

using namespace std;

class RAM{
    
    // deklarasi dan inisialisasi atribut private
    private:
        int capacity = 0;
        int price = 0;

    public:

        // constructor tanpa parameter
        RAM(){
            
        }

        // constructor dengan parameter
        RAM(int Rmcapacity, int Rmprice){
			this->capacity = Rmcapacity;
            this->price = Rmprice;
        }

        // deklarasi setter sebagai method (Write)
		 void setRmcapacity(int Rmcapacity){
            this->capacity = Rmcapacity;
        }
        void setRmprice(int Rmprice){
            this->price = Rmprice;
        }
       

        // deklarasi getter sebagai method (Read Only)
		int getRmcapacity(){
            return this->capacity;
        }
        int getRmprice(){
            return this->price;
        }

        // destructor
        ~RAM(){
            
        }

};