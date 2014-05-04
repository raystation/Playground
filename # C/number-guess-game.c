
#include <stdio.h>

int answer, guess;
int answer = 5;

int main () {
	takeGuess();
	check();

	return 0;
}

int takeGuess () {
	scanf("%i\n", &guess);
	return guess;
}

int check() {
	if ( guess == answer ) {
		printf("You win!\n");
		return 0;
	} else if ( guess > answer ) {
		higher();
		return 0;
	} else {
		lower();
		return 0;
	}
}

int higher() {
	printf("Guess is too high.\n");
	guess();
	return 0;
}

int lower() {
	printf("Guess is too low.\n");
	guess();
	return 0;
}
