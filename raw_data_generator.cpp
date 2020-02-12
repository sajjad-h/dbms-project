#include <bits/stdc++.h>
using namespace std;

int main( )
{
    freopen("infos.txt", "r", stdin);
    freopen("insert_code.txt", "w", stdout);

    int id = 10001;


    string s;
    string query = "insert into donor (Name, Age, BloodGroup, Mobile, Address, City) values (";
    string roll, name, hall, mobile, blood, city;
    while (getline(cin, s)) {
        //cout << s << '\n';
        stringstream ss(s);
        ss >> roll;
        ss >> name;
        ss >> hall;
        ss >> mobile;
        ss >> blood;
        ss >> city;
        cout << query << "\'" << name << "\', " << (rand() % 6 + 18) << ", \'" << blood << "\', \'" << mobile << "\', \'" << hall << "\', \'" << city << "\');";
        cout << '\n';
        id++;
    }

    return 0;
}
