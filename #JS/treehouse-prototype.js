
//person prototype
var personPrototype = {
	name: 'Anonymous',
	greet: function (name, mood) {
			name = name || "You";
			mood = mood || "good";

			console.log ("Hello, " + name + 
				" I am "  + this.name +
				" and I am in a " + mood + " mood!");
	},

	species: 'Homo Sapien'

};
//constructor function
function Person (name) {
	this.name = name;
}

Person.prototype = personPrototype;

ray = new Person("Ray");
sarah = new Person("Sarah");


function Cat (name) {
  this.name = name;
  this.ears = 2;
}

var mittens = new Cat("Sir Mittens");

Cat.prototype.legs = 4;