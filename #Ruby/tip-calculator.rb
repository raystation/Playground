
puts "how much was the meal?"
meal=gets.to_f

puts "what percentage do you want to tip?"
tip_percent= gets.to_f / 100

tip = meal * tip_percent
puts "the tip is #{tip}."

total = meal + tip

puts "the meal with the tip is $#{total}."