#include <bits/stdc++.h>
using namespace std;

char asciitolower(char in)
{
    if (in <= 'Z' && in >= 'A')
        return in - ('Z' - 'z');
    return in;
}
int main ()
{
    string x;
    getline(cin,x);
    x+=' ';
    std::transform(x.begin(), x.end(), x.begin(), asciitolower);
    vector<string> v;
    for(int i=0; i<x.size();)
    {
        int y=i;
        string t;
        while(x[y]!=' ')
            t+=x[y++];
        v.push_back(t);
        i = y+1;
    }
    std::sort(v.begin(),v.end());
    for(string c:v)
        cout << c << endl;
}
