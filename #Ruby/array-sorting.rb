
array1=[1,2,3,4,656,98,34,45,67,12]
# puts array1.sort.reverse


puts array1.all? { |item| item > 3 }
puts array1.any? { |item| item > 3 }

# returns items greater than 3
puts array1.select { |item| item > 3 }
puts array1.reject { |item| item > 3 }

# creates new array from inputted array
array.map {|item| item*2}
