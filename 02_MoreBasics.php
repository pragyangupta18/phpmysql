 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Tutorial </title>
 </head>
 <style>
    *{
        margin : 0 ;
        padding : 0 ; 
        box-sizing : border-box ;
    }
    .container{
        max width : 80%;
        background-color : grey ;
        margin : auto ;
        padding : 23px ;
    }
</style>
 <body>
    <div class="container">
        <h1>Let's Learn About PHP </h1>
    <p>Your Party Status Is Here </p>
    <?php
    $age = 6 ;
    if($age>18){
        echo"<br>You can go to the party";
    }
    elseif($age == 7){
        echo"<br>You are 7 years old ";
    }
    elseif($age == 6){
        echo"<br>You are 6 years old ";
    }
    else{
        echo"<br>You can not go to the party";
    }
   
    $languages = array("Python","c++","php","Node.js");
    echo"<br>$languages[0]";
    echo count($languages);

    $a = 0;
    while($a<=10){
        echo"<br>The value of a  by while is : ";
        echo $a ;
        $a++ ;
    }

    $a = 0;
    while($a < count($languages)){
        echo"<br>The value of language by while is : ";
        echo $languages[$a] ;
        $a++ ;
    }

    $a = 0;
    do{
        echo"<br>The value of a by do while is : ";
        echo $a ;
        $a++ ;
    }while($a<10);

    $a = 20;
    do{
        echo"<br>The value of a by do while is : ";
        echo $a ;
        $a++ ;
    }while($a<10);

    $a =0 ;
    for ($a=0 ; $a < 10 ; $a++) {
        echo"<br>The value of a by for loop is : ";
        echo $a ;
    }

    foreach($languages as $value){
        echo"<br>The value by foreach loop is : ";
        echo $value ;
    }


    function print5(){
        echo"<br>FIVE - written by the function ";
    }
    print5();
    print5();

    function print_number($number){
        echo"<br>Your number is : ";
        echo $number ;
    }
    print_number(45);
    print_number(15);
    print_number(195);

    ?>

    </div>
    
 </body>
 </html>