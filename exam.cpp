#include <iostream>
using namespace std;

class a{
    public:
        int get(int x){
            try{
                throw 0;
            }catch(int y){
                cout<<"first time"<<endl;
            }
        }
};

int main(){
    a cl;
    int n=2;
    try{
        if(n>1){
            cl.get(n);
            throw 5;
        }
    }catch(int e){
        cout<<"Second time";
    }
    return 0;
}

