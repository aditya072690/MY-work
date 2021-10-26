//
//  main.c
//  aditya
//
//  Created by Aditya chauhan on 18/11/20.
//

#include <stdio.h>

int main(int argc, const char * argv[]) {
int p,r,t,int_amt;
printf("Input principle, Rate of interest & time to find simple interest: \n");
scanf("%d%d%d",&p,&r,&t);
int_amt=(p*r*t)/100;
printf("Simple interest = %d",int_amt);
    return 0;
}
