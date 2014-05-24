
array1=[1,2,3,4]
array2=[3,4,5,6]

# returns array item 
puts array1.slice(2)

# returns multiple items
puts array1.slice(2,3)

# returns similiar items between two arrays
puts array1 & array2

# pushes items to beginning of array
array1.unshift(69)

# array1.at(0) is same as array1[0]
puts array1.at(0)

# tells you where in an array something is
rindex = array1.rindex(69)
puts "The r-index of 69 is #{rindex}"

array3 = [1,2,3,4]
array3.push [[4,5,6,7]]
