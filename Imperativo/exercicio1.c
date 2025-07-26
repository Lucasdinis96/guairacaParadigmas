// Vericação de numero primo.
#include <stdio.h>
#include <stdlib.h>

int main () {
    int num;

    printf("Digite um numero: ");
    scanf("%d",&num);

    while (num == 1){
        printf("Digite um numero maior que 1: ");
        scanf("%d",&num);
    }
    for(int i = 2; i <= num; i++) {
        if (num % i == 0 && num > 2) {
            printf("\nNão é numero primo");
            break;
        } else {
            printf("É um número primo");
            break;
        }  
    }
    return 0;
}