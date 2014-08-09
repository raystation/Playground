//check for errors, like pressing plus twice


var input=[];
var newNumber=[];
var calc=[];
var num1, num2, sum, operator, type;
var answerDiv=document.getElementById('answer');

function add(a,b){return a+b;}
function subtract(a,b){return a-b;}
function multiply(a,b){return a*b;}
function divide(a,b){return a/b;}

//activated onclick. takes a number and puts it onto the screen
function getNumber(n){ 
	// if (n=="×") {};

	//checks to ses if the sum is set
	if (typeof sum == "number" ){
		answerDiv.innerHTML="";
		reset();
	};	

	//pushes number into input array
	input.push(n);

	//puts the number onto the screen div
	answerDiv.insertAdjacentHTML('beforeend',n);

	//sets the type
	return type="number";
}

//what happens when you press an operator button
function operator(operator){

	//will return if you press operator before number
	if ( input[0] == null || type=="operator" ){ 
		console.log("ERROR.");
		return; 
	}
	
	//if the sum is already set, and you press an operator, you intend to do somethign with the sum
	if ( typeof sum == "number" ){ 
		answerDiv.innerHTML="";
		//the sum is the first number in the calc array then
	};

	//this shouldn't be a default action
	//turns the number you were working on into a whole number

	if (operator=="+") {
		getWholeNum();
		answerDiv.insertAdjacentHTML('beforeend'," + ");
		calc.push("+");
	};
	if (operator=="=") {
		getWholeNum();
		operator="=";
		console.log(calc);
		calculate();
	};
	return type="operator";
}

function reset(){
	console.log("reset");
	var input=[];
	var newNumber=[];
	var calc=[];
	var num1, num2, sum;
	answerDiv.innerHTML="";
	console.log(input, newNumber);
}


function getWholeNum(){

	//clears out the newNumber array
	newNumber=[];
	
	//takes all the numbers in the input array and concats
	for (var i = 0; i < input.length; i++) {
    newNumber = newNumber+input[i];
	}	
	
	//turns the number into a integer
	newNumber=parseInt(newNumber);

	//debug
  // console.log(newNumber+typeof newNumber);

  // puts the whole number into the calc array 
  calc.push(newNumber);

	//clears out the input array afterusage
	input = [];
	console.log("input cleared: "+input);

	return newNumber;
}



function calculate(){
	console.log("calculating...");

	// if ( operator="=" ) { answerDiv.innerHTML=" "; };

	for (var i = 0; i < calc.length; i++) {
    //array calc[i]
    // console.log("calc[i]: " + calc[i]);

    //checks to see if the first number is set and
    if ( typeof calc[i]=="number" && typeof num1=='number' && typeof operator=="string") { 
    	console.log("first if");
    	num2=calc[i];

    	if (operator=="+") { 
	    	console.log("addition");
    		sum=add(num1,num2);
    		// num1="";
    		// num2="";
    		// console.log(num1,num2);
    	};
    }

    else if ( typeof calc[i]=="number" && typeof num1=='undefined') { 
    	num1=calc[i]; 
    }
   	
   	else if ( typeof calc[i]=="string" ){ 
   		operator = calc[i]; 
   	} 

   	else {
   		return "error";
   	}

    ;
	}
	//prints out the answer
	answerDiv.insertAdjacentHTML('beforeend'," = "+ sum);
	return sum;
}

	//operator
	//when operator is pushed
	//figure out what number was created and add to array

	//secondnumber
	//answer	