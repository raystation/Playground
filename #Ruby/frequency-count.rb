# counting the frequency of a word in an STRING
# puts "input"
# text=gets.chomp
text="penguin batman batman batman batman joker joker joker robin robin penguin batman batman batman batman joker joker joker robin robin penguin batman batman batman batman joker joker joker robin robin"

words=text.split(" ")

frequencies=Hash.new(0)

words.each do |word|
    frequencies[word] += 1
end

# sorting
frequencies = frequencies.sort_by do |word,count|
    count
end

frequencies.reverse!

frequencies.each do |word,count|
    puts word + " " + count.to_s #convert the value from a number to a string using .to_s before we can concatenate it
end