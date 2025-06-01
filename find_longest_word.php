<?php

    function findLongestWord($sentence){

        $replaceChar = str_replace(['', '.', ',', '!', '?',';',':'],'', $sentence);
        $words = explode(' ', $replaceChar);

        $max = '';
        $longestWord = [];
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