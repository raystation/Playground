system "clear"

puts "What is your name?"
name=gets.chomp.capitalize
system "clear"

puts "Hello #{name}! How are you today?"
mood=gets.chomp
system "clear"

case mood
	when "good" then puts "Well aren't you a happy camper."
	when "bad" then puts "well, things are bound to get better."
	when "ok" then puts "Well I am sure you can find something good about life."
	when "fine" then puts ""
	else puts "..."
end
