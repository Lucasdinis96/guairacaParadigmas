#include <stdio.h>
#include <stdlib.h>


void troca(int *A, int *B){
    int aux = 0;
    if (*A > *B){
        aux = *A;
        *A = *B;
        *B = aux;
        printf("Os valores foram trocados");
    } else {
        printf("Os valores não foram trocados");
    }
}

void troca(int *, int*);

int main(){
    int numA, numB;

    printf("Digite o valor de A: ");
    scanf("%d",&numA);
    printf("Digite o valor de B: ");
    scanf("%d",&numB);

    printf("Valores antes da Função: A - %d e B - %d.\n",numA,numB);
    troca(&numA,&numB);
    printf("\nValores após a função: A - %d e B - %d.",numA,numB);

    return 0;
}