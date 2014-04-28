
#include <stdio.h>

int main () {
	// printf("Hello, \"world\"\n");
	
	int my_int;
	printf("Enter my_int: ");
	scanf("%i", &my_int);

	if (my_int > 5) {
		printf("bigger than 5\n");
	} else if ( my_int < 5 ) { 
		printf("smaller than 5\n");
	} else if ( my_int == 5 ) {
		printf("it is 5\n");
	}
	
	// float my_float = my_int / (float)2;
	// printf("A number: %f\n", my_float);		
	
	return 0;
}

