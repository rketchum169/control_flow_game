puts "Let's play a game!"
puts "Higher number wins."
puts "Pick a number between 0 and 9"


loop do

my_number = Random.rand(10)
your_number = gets.chomp.to_i

if your_number > 9 || your_number < 0
	puts "Please pick a nunber between 0 and 9"
	exit
	end

if my_number == your_number
	puts "Play again?"
elsif my_number < your_number
	puts "You cheated! Again!"

else
	puts "I guess I won!"
	break
end
end
