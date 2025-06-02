<?php

/*//Previous code:
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
    print_r($result); 
*/
    function findLongestWord($sentence){
         
        $removeChar = str_replace(['!','.',','],'', $sentence);
        $splitWords = explode(' ', $removeChar);
        
        $max = '';
        $longestWord = [];
        foreach ($splitWords as $word){
            
            if (strlen($word) > strlen($max)){
                
                $max = $word;
                $longestWord = [$word];
                
            }elseif(strlen($max) == strlen($word)){
                array_push($longestWord, $word);
                //or
                //$longestWord []= $word;
            }
            
            
        }
        //print_r($longestWord);
        return $longestWord;
        //print_r($findLongest);
    }
    
    $result = findLongestWord("Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the standard dummy text ever since the 1500s, when an unknown printer took a galley of type and it to make a type specimen book. It has survived not only five , but also the leap into ");
    print_r ($result);
    
    //extra code to print the longest words and their lengths
    echo "\n";
    
    echo "Longest words and characters are: \n";  
    for($i = 0; $i < count($result); $i++){
            
           echo $result[$i] . " - " . strlen($result[$i]). "\n";
    }