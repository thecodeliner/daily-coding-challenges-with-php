//Write a PHP program that counts the number of vowels in a given word.
<?php
$vowels = ["u","o","i","e","a"];
$word = "dialogue";
  $splitWords = [];
  $length = strlen($word);
  $result =[];
  $count = 0;
     //Split $word to array
    // Loop through each character in the string $word using its length
    for ($i = 0; $i < $length; $i++){
    	// Add the current character at position $i to the $splitWords array
        $splitWords[]=$word[$i];
        
     	}
     
     //match 2 arrays to find vowels. ($splitwords and $vowels)
     // Loop through each vowel in the $vowels array
    foreach ($vowels as $vowel){
    	// Loop through each character from the split word
        foreach($splitWords as $splitWord){
        	// Check if the character matches the current vowel
            if($vowel === $splitWord){
              // If it's a vowel, add it to the $result array
            	$result[]=$splitWord;
               // Update the count of vowels found so far
                $count = count($result);
            }
        }
    }
       
    //for ($i = 0; $i< $count; $i++){
    	
    //   echo $result[$i];
    //}
    
    //print_r($newArr);
    
    //printing result
    echo "<pre>";
    print_r($result);
    
    if($count == 1){
    	$msg = "$count vowel found";
    }elseif($count > 1){
    	$msg = "$count vowels found";
    }else{
    	$msg = "No vowels found";
    }
    echo $msg;


//Another way
//==============================02==========================

$vowels = ["u","o","i","e","a"];
$word = "dialogue";
  $length = strlen($word);
  $result =[];
  $count = 0;
    
    //Split $word to array
    for ($i = 0; $i < $length; $i++){
    	
       // $splitWords[]=$word[$i];
        // Loop through each vowel in the $vowels array
     	foreach ($vowels as $vowel){
    	       	// Check if the current character in $word at index $i matches the current vowel
            if($word[$i]=== $vowel ){
              // If it matches, add the vowel to the $result array
            	$result[]=$vowel;
                $count++;
            }
        }
    }
    
    //printing result
    echo "<pre>";
    print_r($result);
    
    if($count == 1){
    	$msg = "$count vowel found";
    }elseif($count > 1){
    	$msg = "$count vowels found";
    }else{
    	$msg = "No vowels found";
    }
    echo $msg;

//Another way
//==============================03==========================


$vowels = ["u","o","i","e","a"];
$word = "dialogue";
        
    $result =[];
    $count = 0;
    
    //Split $word to array
   
    	$splitWords = str_split($word);
      // Loop through each character in the word
        foreach($splitWords as $splitWord){
        // Check if the character is a vowel by looking it up in the $vowels array
         if(in_array($splitWord, $vowels )){
         
         // If it's a vowel, add it to the $result array
         	$result[]=$splitWord;
            // Increment the vowel count
            $count++;
         }
        }
     	
    
    //printing result
    echo "<pre>";
    print_r($result);
    
    if($count == 1){
    	$msg = "$count vowel found";
    }elseif($count > 1){
    	$msg = "$count vowels found";
    }else{
    	$msg = "No vowels found";
    }
    echo $msg;

//====================OUTPUT====================
Array
(
    [0] => i
    [1] => a
    [2] => o
    [3] => u
    [4] => e
)
5 vowels found 
