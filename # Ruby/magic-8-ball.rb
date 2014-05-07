
# loop do
# 	number=rand(1..20).to_i
# 	puts number
# 	break if number == 10
# end

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