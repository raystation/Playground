strings = ["HTML", "CSS", "JavaScript", "Python", "Ruby"]

# Add your code below!

symbols = []

strings.each do |s|
    symbols.push(s.to_sym)
    # symbols.push(s.intern) #also works the same
end

puts symbols