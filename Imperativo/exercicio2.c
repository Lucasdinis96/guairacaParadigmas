// Calculo de numero fatorial.
#include <stdio.h>
#include <stdlib.h>


int fatorialIterativa(int num){
    int fat=1,i;
    for (i = 1; i <= num; i++){
        fat *= i;
    }
    return fat;
}

int fatorialRecursiva(int num){
    if (num == 0 || num == 1)
        return 1;
    else
        return num * fatorialRecursiva(num-1);
        
}

int main (){
    int num,option;
    printf("Digite um numero para fatorial: ");
    scanf("%d",&num);

    while (num < 0 ){
        printf("Digite um numero maior que zero: ");
        scanf("%d",&num);
    }

    printf("Escolha uma função:\n1-Iterativa\n2-Recursiva\nOpcao: ");
    scanf("%d",&option);
    switch (option){
        case 1:
            printf("%d\n",fatorialIterativa(num));
            break;
        case 2:
            printf("%d\n",fatorialRecursiva(num));
            break;
        default:
            printf("Programa encerrado");
            break;
    }
    return 0;
}