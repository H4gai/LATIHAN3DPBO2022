#include <iostream>
#include <string>

using namespace std;

class Disk{ 

/*kelas yang digunakan untuk mengimplementasikan Disk/
/*atribut Disk*/
		private:
			string type = "";		//type disk
			int capacity = 0;		//capacity
			int price = 0;			//disk price
	
		public:
		
		Disk(){
		/*costructor*/
		}
		
		 // constructor dengan parameter
        Disk(string type, int capacity, int Dsprice){
            this->type = type;
            this->capacity = capacity;
			this->price = Dsprice;
        }
	
	/*mengeset nilai type*/
	void settype(string type)
	{
		this->type = type;
	}
	/*mengeset nilai capacity*/
	void setcapacity(int capacity)
	{
		this->capacity = capacity;
	}
	/*mengeset nilai price*/
	void setDsprice(int Dsprice)
	{
		this->price = Dsprice;
	}

	/*mengembalikan nilai type*/
	string gettype()
	{
		return this->type;
	}
	/*mengembalikan nilai capacity*/
	int getcapacity()
	{
		return this->capacity;
	}
	/*mengembalikan nilai price*/
	int getDsprice()
	{
		return this->price;
	}
	
	~Disk(){
		/*desstructor*/
		}
};