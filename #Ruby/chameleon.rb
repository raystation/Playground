class chameleon
	random_number = rand(0..2)
	case random_number
	when 0
		color = red
	when 1
		color = blue	
	when 2
		color = green
	def saying
		puts "I like to jam!"
	end
end

