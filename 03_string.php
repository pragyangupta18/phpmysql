<?php
    $str = "This is a string " ;
    echo $str ;
    $len = strlen($str);
    // echo"<br>The length of the string is : " ;
    // echo $len ;
    echo"<br>The length of the string is : " .$len ." Thank you <br>" ;

    echo"<br>The Number of words in the string is : " .str_word_count($str) ."<br>" ;

    echo"<br>The reverse string is : " .strrev($str) ."<br>" ;

    echo"<br>The search for this in the string is : " .strpos($str, "is") ."<br>" ;

    echo"<br>The replaced function in the string is : " .str_replace("is","at",$str) ."<br>" ;






?>