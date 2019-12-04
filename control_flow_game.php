<?php
    echo "Let's play a game!\n"; // Instructions
    echo "The higher number wins.\n";
    echo "Pick a number between 0 & 9\n";
    
		do {

		$comp_number = mt_rand(0,10);    
    $u_input = rtrim(fgets(STDIN));
		$u_number = (int)$u_input;
		
		if ($u_number > 9 || $u_number < 0){
		echo "Please pick a number between 0 and 9\n";
		}	elseif ($comp_number == $u_number){
		echo "Well we got the same number. Choose another one.\n";
		} elseif ($comp_number < $u_number){
		echo "You cheated! Pick another number!\n";
		}	elseif ($comp_number > $u_number)break;
	
		}	while($comp_number <= $u_number);
		    
		echo "HAHA! MY NUMBER WAS {$comp_number} SO I WON, YOU LOSE! TOO EASY! Bye.\n";		
	
?>
