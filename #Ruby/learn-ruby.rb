#comments

puts "Pokemon".length
puts "Raymond Yuen".upcase
puts "Raymond Yuen".downcase
puts "Raymond Yuen".reverse

puts 25%7

name = "Raymond Yuen"
puts name.downcase.reverse.upcase

# BASIC WHILE & UNTIL LOOPS
counter = 1
while counter < 5
	puts counter
	counter = counter + 1
end

counter = 1
until counter >5
	puts counter
	counter += 1
end

# ASSIGNMENT OPERATORS	+=		-=		*=		/=

# LOOPS WITH SET LIMITS
for num in 1...10 # three dots excludes final number
  puts num
end

for num in 1..10 # two dots includes final number
  puts num
end

(5..20).each { |i| puts i }

# ITERATOR another way to loop
i = 0
loop do
  i += 1
  print "#{i}"
  break if i > 5
end

# NEXT 
for i in 1..5
  next if i % 2 == 0
  print i
end

# ARRAYS
my_array = [1,2,3,4,5]

#EACH code for array items
odds = [1,3,5,7,9]
odds.each do |x|
	x*=2
	print x
end

odds.each { |x| 
	x*=2
	print x 
}

10.times { print "poooop"}

# multi dimensional array
my_2d_array = [["ray","jeremy","sun"],["ray","sarah","karyn"],[1,2,3,4]]

# hash indices
batman_identities = {
  "Robin" => "Dick Grayson",
  "Batman" => "Bruce Wayne",
  "Penguin" => "Oswald Cobblepot"
}
puts batman_identities["Batman"]

pets=Hash.new
pets["ray"] = "cat"

puts pets["ray"]

# iterating over every item in a multi dimensional array
s = [["ham", "swiss"], ["turkey", "cheddar"], ["roast beef", "gruyere"]]

s.each do |sandwich|
    sandwich.each do |ingredients|
        puts ingredients
    end
end


