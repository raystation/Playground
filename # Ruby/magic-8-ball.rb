# MAGIC 8 BALL
# will randomly choose a number depending on the number of items in the array, and prints it to the screen. 
# loops until you say exit

fortunes = [
	"The tides are turning...",
	"Look for new opportunities in pyramid schemes.",
	"Don't look at the gift horse.",
	"The last dinosaur is the one who has the last bite.",
	"Your future looks very glossy!",
	"We are liking the looks of the future!",
	"That's a weird rash.",
	"que?",
	"the burro never kicks the burrito.",
	"the heart is open 24/7",
	"Long absent, soon forgotten.",
	"Two in distress makes sorrow less.",
	"Beware the 20th mile.",
]
count=fortunes.length

system "clear"
puts "MAGIC 8 BALL"
puts "========================"
action="shake"
loop do
	puts "type 1 to find your fortune or 2 to exit"
	loop do 
		action=gets.chomp.to_i
		break if action==1
		break if action==2
		puts "ERROR. type 1 to find your fortune or 2 to exit"
	end
	break if action==2


	number=rand(0...count)
	puts fortunes[number]

end 
system "clear"