#include<stdio.h>
#include<stdlib.h>

int main()
{
    int *a,n,i,j,t;
    printf("number sorted:");
    scanf("%d",&n);
    a=(int *)malloc(n*sizeof(int));
    printf("enter %d number : \n",n);
    for ( i = 0; i < n; i++)
    {
        scanf("%d",(a+i));
    }
    for ( i = 0; i < n; i++)
    {
        for ( j = 0; j < i; j++)
        {
            if (*(a+i)<*(a+j))
            {
                t=*(a+i);
                *(a+i)=*(a+j);
                *(a+j)=t;
            }
            
        }
        
    }
    printf("\n after sorting in ascending orde:\n");
    for ( i = 0; i < n; i++)
    {
        printf("\n%d",*(a+i));
    }
    return 0;
    
}