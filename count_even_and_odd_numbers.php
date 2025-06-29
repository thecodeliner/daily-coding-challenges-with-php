//Count how many even and odd numbers are in an array.
// Output: Even = 4, Odd = 4
<?php
$numbers = [1, 5, 2, 3, 4, 5, 6,8]; 
$even = [];
$odd = [];

foreach ($numbers as $number){
if($number % 2 == 0){
	$even[]=$number;
    
}elseif($number % 2 == 1){
 		$odd[]=$number;
        
}
$countEven = count($even);
$countOdd = count($odd);
}
echo "Even Numbers : ". $countEven;
echo "<br>";
echo "Odd Numbers : ". $countOdd;
