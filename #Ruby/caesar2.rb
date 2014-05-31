
# In cryptography, a Caesar cipher, also known as Caesar's cipher, the shift cipher, Caesar's code or Caesar shift, is one of the simplest and most widely known encryption techniques. It is a type of substitution cipher in which each letter in the plaintext is replaced by a letter some fixed number of positions down the alphabet. For example, with a left shift of 3, D would be replaced by A, E would become B, and so on. The method is named after Julius Caesar, who used it in his private correspondence.

system 'clear'

$l_alphabet = ('a'..'z').to_a
$u_alphabet = ('A'..'Z').to_a

def encode ( message, shift )

	puts "\n"
	$l_alphabet.each do |letter|
		print letter
	end
	$u_alphabet.each do |letter|
		print letter
	end
	puts "\n"

	$l_alphabet.each do |letter|
		$position = $l_alphabet.index(letter) - shift
		$position +=26 if $position < 0  
		print $l_alphabet[$position]
	end

	$u_alphabet.each do |letter|
		$position = $u_alphabet.index(letter) - shift
		$position +=26 if $position < 0  
		print $u_alphabet[$position]
	end		

	puts "\n\n"
	message.each_char do |c|

		if $l_alphabet.include? c
			$position = $l_alphabet.index(c) - shift
			$position +=26 if $position < 0 
			new_letter = $l_alphabet[$position]
			print new_letter

		elsif $u_alphabet.include? c
			$position = $u_alphabet.index(c) - shift
			$position +=26 if $position < 0
			new_letter = $u_alphabet[$position]
			print new_letter
		
		else
			print c
		
		end

	end

	print "\n\n"

end

# encode "Hello, my name is Ray!!",15

def input
	print "message: "
	message=gets.chomp

	print "shift: "
	shift=gets.to_i

	encode message,shift
end

input


