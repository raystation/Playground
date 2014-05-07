def alphabetize (arr, rev=false)
    if rev==false
        arr.sort!
    elsif rev==true
        arr.sort!.reverse!
    end
end

numbers = [5, 1, 3, 8]

puts alphabetize(numbers)
puts alphabetize(numbers,true)