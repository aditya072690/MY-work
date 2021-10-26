#include <stdio.h>
#include <math.h>
int checkPrimeNumber(int n);
int checkArmstrongNumber(int n);
int main()
{
int n, a;
printf("Enter a positive integer: ");
scanf("%d", &n);
// Check prime number
a = checkPrimeNumber(n);
if (a == 1)
printf("%d is a prime number.\n", n);
else
printf("%d is not a prime number.\n", n);
// Check Armstrong number
a = checkArmstrongNumber(n);
if (a == 1)
printf("%d is an Armstrong number.", n);
else
printf("%d is not an Armstrong number.",n);
return 0;
}
int checkPrimeNumber(int n)
{
int i, a = 1;
for(i=2; i<=n/2; ++i)
{
// condition for non-prime number
if(n%i == 0)
{
a = 0;
break;
}
}
return a;
}
int checkArmstrongNumber(int number)
{
int originalNumber, remainder, result = 0, n = 0, a;
originalNumber = number;
while (originalNumber != 0)
{
originalNumber /= 10;
++n;
}
originalNumber = number;
while (originalNumber != 0)
{
remainder = originalNumber%10;
result += pow(remainder, n);
originalNumber /= 10;
}
// condition for Armstrong number
if(result == number)
a = 1;
else
a = 0;
return a;
}