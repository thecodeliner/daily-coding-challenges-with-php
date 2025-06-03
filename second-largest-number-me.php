<?php

	$numbers = [11,25,54,36,78,98,120];
  
    //sort the array in descending order
    arsort($numbers);
    //remove the first element (largest number)
    array_shift($numbers);
    //initialize the largest variable
    $largest = 0;
    //find the second largest number
    foreach ($numbers as $number){
    	if ($number > $largest){
        	$largest = $number;
        }
        
    }
		echo "Second largest number is: $largest";

