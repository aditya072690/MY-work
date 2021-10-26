#include <stdio.h>
int power(int b, int a);
int main() {
    int b, a, r;
    printf("Enter base number: ");
    scanf("%d", &b);
    printf("Enter power number: ");
    scanf("%d", &a);
    r = power(b, a);
    printf("%d^%d = %d", b, a, r);
    return 0;
}

int power(int b, int a) {
    if (a != 0)
        return (b * power(b, a - 1));
    else
        return 1;
}