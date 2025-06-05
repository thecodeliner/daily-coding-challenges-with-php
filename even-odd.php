<?php

$evenNumbers = [2, 4, 6, 8, 10];
$oddNumbers = [1, 3, 5, 7, 8];
function findEvenOdd($evenNumbers, $oddNumbers) {
    $result = [];
    foreach ($evenNumbers as $number) {
        if ($number % 2 == 0) {
            $result[] = $number;
        }
    }
    foreach ($oddNumbers as $number) {
        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }
    return $result;
}
$evenOddNumbers = findEvenOdd($evenNumbers, $oddNumbers);
echo "Even and Odd numbers: " . implode(", ", $evenOddNumbers) . "\n";




