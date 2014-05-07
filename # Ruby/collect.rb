
# The collect method takes a block and applies the expression in the block to every element in an array. 
# my_nums = [1, 2, 3]
# my_nums.collect { |num| num ** 2 }
#  ==> [1, 4, 9]

fibs = [1, 1, 2, 3, 5, 8, 13, 21, 34, 55]
doubled_fibs = fibs.collect { |num| num*2 }