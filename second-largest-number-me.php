<?php

	$numbers = [11,25,54,36,78,98,120];
    
    arsort($numbers);
    array_shift($numbers);
    $largest = 0;
    foreach ($numbers as $number){
    	if ($number > $largest){
        	$largest = $number;
        }
        
    }
		echo "Second largest number is: $largest";

