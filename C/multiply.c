
#include <stdio.h>

int first, second, multiply;

int main () {

	printf("I will multiply two numbers for you. \n");
	
	firstNumber();
	secondNumber();
	multiplyNumbers();

	return 0;
}

int firstNumber() {
	printf("enter a number\n");
	scanf("%i", &first);
	return first;
}

int secondNumber() {
	printf("enter another number\n");
	scanf("%i", &second);
	return second;
}

int multiplyNumbers() {
	int multiply = first * second;
	printf("The answer is %i\n", multiply);	
	return multiply;
}