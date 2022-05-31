// 3.1:  WAP to perform exception handling for Divide by zero Exception.

#include <iostream>
using namespace std;

double division(int a, int b)
{
    if (b == 0)
    {
        throw "Division by zero condition!";
    }
    return (a / b);
}

int main()
{
    int x = 50;
    int y = 0;
    double z = 0;

    try
    {
        z = division(x, y);
        cout << z << endl;
    }
    catch (const char *msg)
    {
        cerr << msg << endl; // cerr is an object of the stderr stream
    }

    return 0;
}


// -----------------------------------------






// Practical 3.1 b:WAP to implement the exception handling with the functionality of testing the throw restrictions.

#include <iostream>

#include <conio.h>

using namespace std;

void handle(int test)

{

    try
    {

        if (test == 0)
            throw test; // throw int

        if (test == 1)
            throw 'a'; // throw char

        if (test == 2)
            throw 123.23; // throw double
    }

    catch (int i)
    { // catch an int exception
        cout << "Caught " << i << "\n";
    }

    catch (...)
    { // catch all other exceptions

        cout << "Caught one!\n";
    }
}

int main()
{

    cout << "start\n";

    handle(0);

    handle(1);

    handle(2);

    cout << "end";

    return 0;
}
// =======================================================================================================









