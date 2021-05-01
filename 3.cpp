
#include <iostream>
#include <string>
using namespace std;
int main()
{
    int i,j,input;
    cout<<"masukkan angkanya : "; cin>>input;
  for(i=0; i<input; i++){
   for(j=0; j<input; j++){
     if(i==input/2 || j==input/2 || (i==0 && j== 0) || (i==0 && j==input-1) || (i==input-1 && j==0) || (i==input-1 && j==input-1)){
         cout<<"* ";
      }
      else{
         cout<<"= ";
      }
   }
   cout<<endl;
}
}
