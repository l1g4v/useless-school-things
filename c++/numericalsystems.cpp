#include <bits/stdc++.h>
using namespace std;

//utils
int char2into(char x){
    if(x>=48 && x <= 55) return x-48;
    return -1;
}
int char2int(char x){
    if(x>=48 && x <= 57) return x-48;
    if(x>=65 && x <= 70) return x-55;
    if(x>=97 && x <= 102) return x-87;
    return -1;
}
//utils

//bin
int bin2dec(string x){
    int mul=0,y=0;
    for(int i=x.size()-1;i>=0;i--)
        mul+= (x[i]-48) * pow(2,y++);
    return mul;
}

string dec2bin(int x){
    string ret="";
    for(int i=4;i>=0;i--){
        int k = x>>i;
        if(k&1)ret+="1";
        else ret+="0";
    }
    return ret;
}
//bin

//oct
int oct2dec(string x){
    int mul=0,y=0;
    for(int i=x.size()-1;i>=0;i--){
        int ci = char2into(x[i]);
        if(ci==-1) {cout << "octal invalido"; return 0;}
        mul += ci * pow(8,y++);
    }
    return mul;
}
string dec2oct(int x){
    string y;
    while(x>0){
        int z = x%8;
        y.push_back((char)(z>9 ? z+55 : z + 48));
        x/=8;
    }
    reverse(y.begin(),y.end());
    return y;
}
//oct

//hex
int hex2dec(string x){
    int mul=0,y=0;
    for(int i=x.size()-1;i>=0;i--){
        int ci = char2int(x[i]);
        if(ci==-1) {cout << "hexadecimal invalido"; return 0;}
        mul += ci * pow(16,y++);
    }
    return mul;
}
string dec2hex(int x){
    string y;
    while(x>0){
        int z = x%16;
        y.push_back((char)(z>9 ? z+55 : z + 48));
        x/=16;
    }
    reverse(y.begin(),y.end());
    return y;
}
//hex
int main()
{
    while(true){
        cout << "\n\n";
        cout << "0: salir\n" <<
        "1: binario-decimal\n" <<
        "2: decimal-binario\n" <<
        "3: octal-decimal\n" <<
        "4: decimal-octal\n" <<
        "5: hexa-decimal\n" <<
        "6: decimal-hexa\n" <<

        "7: hexa-octal\n"<<
        "8: octal-hexa\n"<<
        "9: hexa-bin\n"<<
        "10: bin-hexa\n"<<
        "11: octa-bin\n"<<
        "12: bin-octa\n\n";
        int opt;
        cin>>opt;
        string x;
        int y;
        switch(opt){
        case 0:
            return 0;

            case 1:
                cin>>x;
                cout << bin2dec(x);
            break;
            case 2:
                cin>>y;
                cout << dec2bin(y);
                break;

                case 3:
                cin>>x;
                cout << oct2dec(x);
            break;
            case 4:
                cin>>y;
                cout << dec2oct(y);
                break;

                case 5:
                cin>>x;
                cout << hex2dec(x);
            break;
            case 6:
                cin>>y;
                cout << dec2hex(y);
                break;
            case 7:
                cin>>x;
                cout << dec2oct(hex2dec(x));
                break;
            case 8:
                cin>>x;
                cout << dec2hex(oct2dec(x));
                break;
            case 9:
                cin>>x;
                cout << dec2bin(hex2dec(x));
                break;
            case 10:
                cin>>x;
                cout << dec2hex(bin2dec(x));
                break;
            case 11:
                cin>>x;
                cout << dec2bin(oct2dec(x));
                break;
            case 12:
                cin>>x;
                cout << dec2oct(bin2dec(x));
                break;

            default:
                cout << "xd";
                break;
        }
    }
    return 0;

}
