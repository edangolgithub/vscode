 #include<fstream>
 #include<conio.h>
 #include<stdio.h>
 #include<math.h>
 #include<cstring>
 #include<process.h>
 #include<iostream>
 using namespace std;
 char from[30],to[30]; 
  void detail()	
   { 
      cout<<"From"<<endl;
       cin.ignore();
      gets(to);
      
       cout<<"To"<<endl;
       cin.ignore();
	    gets(from); 
    } 

  
void read()
{
		railways r;
	fstream f;
	f.open("train.dat",ios::binary|ios::in);
	while(!f.eof())
	{
		f.read((char*)&r,sizeof(r))
		;
	r.show();
	}
}
 int main()
    {
    //read();
    //	return 0;
    	railways tr;
         unsigned int per_km=5,choice, d1=0,d2=0,i;
       char station_searched[30];
  while(1)
    {
 cout<<"\n\t\t\t WELCOME TO INDIAN RAILWAYS \n";
for(i=0;i<80;i++)
    {
 cout<<"-";    
        } 
 t<<endl<<"Enter your choice"<<endl<<" 1:->Add new railway stationnt"<<endl<<" 2:- >Book ticket"<<endl; 
cout<<" 3:->Change per km rates "<<endl<<" 4:->modify database of trainn"<<endl<<" 5:->exit"<<endl;
for(i=0;i<80;i++)
      {
 cout<<"-"; 
       }
       cout<<endl;
 cin>>choice;
 if(choice==1)
      {
  ofstream of1("train.dat",ios::binary|ios::app); 
  tr.ad_data(); 
  of1.write((char*)&tr,sizeof(tr));
  of1.close();
  
       }
 if(choice==2) 
      {
 ifstream of1("train.dat",ios::binary); 
 detail();

while(!of1.eof())
     {
 of1.read((char*)&tr,sizeof(tr));
  cout<<from<<to;
 if(0==strcmpi(from,tr.station_v()))
     {
    d1=tr.dist();
   
 }  
 if(0==strcmp(to,tr.station_v()))
   {
     d2=tr.dist();
   }
 if(d1 && d2)
    {
 tr.amount(d1,d2,per_km);
 getch(); 
 break;
    }
 if(of1.eof())
    {
 cout<<"\nstations not found check your spelling\n";
 getch();
      };
    }
 of1.close();
 break; 
}
 if(choice==3)
     { 
 cout<<"Enter new per km rates";
 cin>>per_km;
     }
 if(choice==4)
    {
 cout<<"enter the railway station to be changed";
 gets(station_searched);
 cin.ignore();
 ifstream f1("train.dat",ios::binary);
 while (f1 )
     {
 f1.read((char*)&tr,sizeof(tr));
 long pos=f1.tellg();

 if(0==strcmp(station_searched,tr.station_v())) 
    {
 f1.seekg((-1*sizeof(tr),ios::cur));
 tr.modify(); 
f1.close();

ofstream f1("train.dat",ios::app); 
f1.seekp(pos,ios::beg);
 f1.write((char*)&tr,sizeof(tr));
 cout<<"record modified"; 
f1.close();
 break;
       }

 else if(f1.eof())
     {
 cout<<"nStation not foundn"; 
getch();  
    }
    }
    }
 if(choice==5)
    {
 cout<<"\nTHANK YOU FOR USING INDIAN RAILWAYS ";
 getch(); 
exit(0);
      }
 if(choice!=1&&choice!=2&&choice!=3&&choice!=4&&choice!=5) 
    {
 cout<<"entered wrong choice PROGRAM IS ABORTING!!!!!!";
 getch();
 exit(0);
    }
    }
 getch(); 
     }





