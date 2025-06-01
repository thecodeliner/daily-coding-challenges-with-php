

<?php

function wordCount($sentence) {
    //lowercase the sentence 
    $lowerCase = strtolower($sentence);
    //remove special characters from the sentence
    $replaceChar = str_replace(['!', '?', '.', ','], '', $lowerCase);
    //split the sentence to words
    $words = explode(' ', $replaceChar);
    //count the values of each word
    $wordCount = array_count_values($words);
    //return the word count
    return $wordCount;
    
}

$result = wordCount("Hello World! This is a test world.");
print_r($result);


