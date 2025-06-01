<?php

    function findLongestWord($sentence){
        //remove special characters from the sentence
        $replaceChar = str_replace(['', '.', ',', '!', '?',';',':'],'', $sentence);
        
        //split the sentence to words
        $words = explode(' ', $replaceChar);
        // define a variable to hold the longest word
        $max = '';
        //define an array to hold the longest word
        $longestWord = [];
        //loop to find the longest word
        foreach ($words as $key => $word){
            if (strlen($word) > strlen($max)){
                $max = $word;
                $longestWord = [$key => $word];
                
            }elseif (strlen($word) == strlen($max)){
                $longestWord[$key] = $word;
            }
        }
        return $longestWord;

    }

    $result = findLongestWord("we are going to need for speed");
    print_r($result); // Output: The quick brown fox! jumps over the lazy dog. 