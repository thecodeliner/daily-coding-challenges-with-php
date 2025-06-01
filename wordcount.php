

<?php

function wordCount($sentence) {

    $lowerCase = strtolower($sentence);
    $replaceChar = str_replace(['!', '?', '.', ','], '', $lowerCase);
    $words = explode(' ', $replaceChar);
    $wordCount = array_count_values($words);

    return $wordCount;
    
}

$result = wordCount("Hello World! This is a test world.");
print_r($result);


