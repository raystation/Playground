
#include <stdio.h>

int main () {

	float dinnerTotal;
	float tipPercentage;
	float tipInPercent;
	float tip;
	
	printf("Enter the dinner total: \n");
	scanf("%f", &dinnerTotal);
	// printf("Dinner total is %f\n", dinnerTotal);

	printf("Enter the tip percent: \n");
	scanf("%f", &tipPercentage);
	// printf("tip is %f\n", tipPrecentage);

	float tipInPercent = tipPercentage / 100;
	printf("%f\n", tipInPercent);
	
	float tip = dinnerTotal * tipInPercent;
	// printf("The tip is  %f \n", tip);
	
	float dinnerAndTip = dinnerTotal + tip;
	printf("For a %f meal with a %f tip, you will be paying %f\n", dinnerTotal, tip, dinnerAndTip );

	return 0;
}


