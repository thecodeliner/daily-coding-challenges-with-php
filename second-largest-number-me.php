<?php

	$numbers = [11,25,54,36,78,98,120,98];

    function findSecondLargest($numbers) {
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
    return $largest;

}
	echo "The second largest number is: " . findSecondLargest($numbers);

