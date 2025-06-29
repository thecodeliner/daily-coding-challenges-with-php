//Find the largest and smallest element in an array.

<?php

$numbers = [55, 8, 2, 11, 3, 22]; 

$max = $numbers[0];
$min = $numbers[0];
foreach($numbers as $number){
	
    if($number > $max){
    	$max = $number;
    }elseif($number < $min){
    	$min = $number;
    }
}

echo "Max Number is : " . $max;
echo "<br>";
echo "Min Number is : " . $min;
