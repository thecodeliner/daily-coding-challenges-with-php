<?php
$msg="";
	$array=[];
    $revArray=[];
	$word="server";
    $length = strlen($word);
	for ($i = 0; $i < $length; $i++){
    	$array[]= $word[$i];
    }
    echo "<br>";
    for ($i = $length-1; $i >=0; $i--){
    	//echo $i;
        $revArray[]=$word[$i];
    }
    
    if ($revArray === $array){
    	$msg = "This is a palindrome word!";
    
    }else{
    	$msg = "Not a palindrome word!";
    }
    
   print_r($array);
   echo "<br>";
   print_r($revArray);
   echo "<br>";
   echo $msg;
