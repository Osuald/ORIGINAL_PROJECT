#include <iostream>
using namespace std;
class complex{ 
    public: 
    float real, img;
     Complex () { 
        this->real = 0.0; 
        this->img = 0.0; 
    }
     complex (float real, float img) { 
        this->real = real;
        this->img = img;}
    Complex operator + (const complex & obj){
            complex t;
            t.img=this->img+obj.img; 
            t.real=this->real+obj.real; 
            return t;
    }
    void display () {
    Cout<<this->real<<" + "<<this->img<<"i"<<endl;
    }
}; 
    int main(){ 
        complex a,b,c;
        cout<<"enter the real coefficient of the first number:\n";
        cin>>a.real;
        cout<<"enter the complex coefficient of the first number:\n";
        cin>>a.img;
        cout<<"enter the real coefficient of the second number:\n";
        cin>>b.real;
        cout<<"enter the complex coefficient of the second number:\n";
        cin>>b.img;
        cout<<"The result by adding those two numbers is:\n";
        c=a+b;
        c.display();
        return 0;
    }