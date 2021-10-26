#include <stdio.h>
int Numbers(int n);
int main() {
    int num;
    printf("Enter a positive integer: ");
    scanf("%d", &num);
    printf("Sum = %d", Numbers(num));
    return 0;
}

int Numbers(int n) {
    if (n != 0)
        return n + Numbers(n - 1);
    else
        return n;
}