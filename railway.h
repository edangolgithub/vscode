 class railways
    {
       char station[30];
       unsigned int distance;
       float fare; 
  public:
  void ad_data()
           { 
       cout<<"Enter Railway Station name"<<endl;
       cin.ignore();
       gets(station);
     
       cout<<"enter its distance from Jammu Tawi"<<endl; 
        
       cin>>distance;
            }

  void amount(int a,int b,int c)
     {

cout<<"total distance="<<fabs((a-b))<<"\ncharges per/km="<<c; 
fare=fabs((a-b))*c;
 cout<<"\nticket cost ="<<fare;
     }
 unsigned int dist() 
     {
 		return distance;
      }
 char* station_v() 
     {
        return station ; 
      }
 void modify()
     {
 	cout<<"\nEnter new railway stationn";
 	 cin.ignore();
	 gets(station);

		cout<<"\nenter its distance from jammu tawi \n"; 
			 cin.ignore();
   		cin>>distance; 
         }
         void show()
         {
         	cout<<station;
         	cout<<distance;
         	cout<<fare<<endl;
		 }
   };
   
