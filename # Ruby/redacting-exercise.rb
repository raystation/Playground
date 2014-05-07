
puts "input 1"
text=gets.chomp

puts "thing to redact"
redact=gets.chomp

words = text.split(" ")

words.each do |word|
    if word == redact
        print "REDACTED "
    else
        print word + " "
    end
end