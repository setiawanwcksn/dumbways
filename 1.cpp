#include <iostream>
using namespace std;

int main(){
    int  menetas=21, target=441;
    long double burung=6969;
    int x = target/menetas;

    for (int i = 0; i < x; i++)
    {
        burung = (burung - (burung*11.1/100))*2;

    }   
    cout<<burung;
}