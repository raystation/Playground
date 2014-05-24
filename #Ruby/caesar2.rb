# casear shifter

# In cryptography, a Caesar cipher, also known as Caesar's cipher, the shift cipher, Caesar's code or Caesar shift, is one of the simplest and most widely known encryption techniques. It is a type of substitution cipher in which each letter in the plaintext is replaced by a letter some fixed number of positions down the alphabet. For example, with a left shift of 3, D would be replaced by A, E would become B, and so on. The method is named after Julius Caesar, who used it in his private correspondence.

# def caesarshift 
# end

message="I would like to invade Egypt"
shift=1

alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" 
# puts ('a'..'z').to_a

message.each_char do |c|

	if c == "\s"
		print "\s" 
	else	
		position = alphabet.index(c) - shift
		print new_letter = alphabet[position]
	end 
end


