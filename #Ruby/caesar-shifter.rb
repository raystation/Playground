# casear shifter

# In cryptography, a Caesar cipher, also known as Caesar's cipher, the shift cipher, Caesar's code or Caesar shift, is one of the simplest and most widely known encryption techniques. It is a type of substitution cipher in which each letter in the plaintext is replaced by a letter some fixed number of positions down the alphabet. For example, with a left shift of 3, D would be replaced by A, E would become B, and so on. The method is named after Julius Caesar, who used it in his private correspondence.

# Implement a caesar cipher that takes in a string and
# the shift factor and then outputs the modified string:

# seperate chars in to an array
# shift the alpha-char by next_2
# join alpha-chars

def caesar_cipher(word, shift)
	letters = ('a'..'z').to_a.concat(('A'..'Z').to_a) # create array of all possible chars
	decoded = ""

	word.each_char do |c| 
		if letters.include?(c)	
			decoded += letters[letters.index(c) - shift]
		else
			decoded += c # adds non-alpha char to the decoded string
		end
	end
	 decoded
end

p caesar_cipher("Zola Mundo!", 5)