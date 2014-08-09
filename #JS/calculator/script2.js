//check for errors, like pressing plus twice
//takes two variables
//makes sum

var input=[];
var newNumber=[];
var calc=[];
var prev_sums=[];
var num1, num2, sum, error;
var answerDiv=document.getElementById('answer');

function addition(a,b){return a+b;}
function subtract(a,b){return a-b;}
function mult(a,b){return a*b;}
function div(a,b){return a/b;}

//turns a number whole and pushes to input
function getWholeNum(){

	//clears out the newNumber array
	newNumber=[];
	
	//takes all the numbers in the input array and concats
	for (var i = 0; i < input.length; i++) {
    newNumber = newNumber+input[i];
	}	
	
	//turns the number into a integer
	newNumber=parseInt(newNumber);

	//clears out the input array afterusage
	// console.log("input: "+ input);
	input = new Array();

	return newNumber;
}

function clear_screen(){
	answerDiv.innerHTML="";
}

//activated onclick. takes a number and puts it onto the screen
function inputNumber(n){
	console.log("button press. "+n);

	if (typeof sum=="number") {
		console.log("sum is a number.");
		reset();
	} else if ( error==true ){
		clear_screen();
		reset();
	}

	//pushes number into input array
	input.push(n);

	//puts the number onto the screen div
	answerDiv.insertAdjacentHTML('beforeend',n);
}

//what happens when you press an operator button
function operator(op){
	
	if (calc[3]) {
		error();
		return;
	};

	console.log("button press."+op);
	
	// needs to log new number into calc array
	pushCalc();

	if ( op == "x" ) { answerDiv.insertAdjacentHTML('beforeend',"&times;"); } 
	else if ( op == "-" ) { answerDiv.insertAdjacentHTML('beforeend',"&ndash;"); } 
	else if ( op == "/" ) { answerDiv.insertAdjacentHTML('beforeend',"÷"); } 
	else {answerDiv.insertAdjacentHTML('beforeend',op); }
	
	//pushes operation into calc array
	pushCalc(op);

}

function pushCalc(x){
	if (typeof x == "string") {
		calc.push(x);
 		console.log("pushed to calc: "+calc);
	} else {
		calc.push( getWholeNum() );
 		console.log("pushed to calc: "+calc);
 	}
}

function reset(){
	input=[];
	newNumber=[];
	calc=[];
	num1, num2; 
	sum=[];
	answerDiv.innerHTML="";
	console.log("reset",input,newNumber,calc,num1,num2,sum);
}

function reset_all(){
	reset();
	prev_sums="";
	document.getElementById('sums').innerHTML=prev_sums;
}

function error(){
	error=true;
	reset();
	answerDiv.innerHTML="ERROR";
}

function calculate(){
	
	//push last number to calc
	pushCalc();

	if ( calc[1]== "+") { 
		sum = addition(calc[0],calc[2]);
		// update_sums();
		answerDiv.insertAdjacentHTML('beforeend',"="+sum);
		input=[];
	}
	else if ( calc[1]== "-") { 
		sum = subtract(calc[0],calc[2]);
		// update_sums();
		answerDiv.insertAdjacentHTML('beforeend',"="+sum);
		input=[];
	}
	else if ( calc[1]== "x") { 
		sum = mult(calc[0],calc[2]);
		// update_sums();
		answerDiv.insertAdjacentHTML('beforeend',"="+sum);
		input=[];
	}	
	else if ( calc[1]== "/") { 
		sum = div(calc[0],calc[2]);
		// update_sums();
		answerDiv.insertAdjacentHTML('beforeend',"="+sum);
		input=[];
	}	
}

function update_sums(){
	prev_sums.unshift(sum);
	document.getElementById('sums').innerHTML=prev_sums;
}


