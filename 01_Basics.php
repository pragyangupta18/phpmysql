<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP </title>
</head>
<body>
    <div class="container">
        This is PHP World
        <?php
        define('pi',3.14);
        echo "<br>" ;
            echo "This is printed using php";

            //Single line Comment
            /* multi line comment */

            //Operators in php
            //Arithmetic , Assignment , Comparison , Increment/decrement , Logical.


            echo "<br>" ;
            $Variable1 =  34 ;
            $Variable2 =  45 ;
            echo $Variable1 ;
            echo "<br>" ;
            echo $Variable2 ;
            echo "<br>" ;
            echo $Variable1 + $Variable2 ;
            echo "<br>" ;
            echo $Variable1 - $Variable2 ;
            echo "<br>" ;
            echo $Variable1 * $Variable2 ;
            echo "<br>" ;
            echo $Variable1 / $Variable2 ;
            echo "<br>" ;

            $Newvar = $Variable1;
            echo"The value of new Var is ";
            echo $Newvar ;
            echo "<br>" ;

            $Newvar = $Variable1;
            $Newvar += 1;
            echo"The value of new Var is ";
            echo $Newvar ;
            echo "<br>" ;

            $Newvar = $Variable1;
            $Newvar -= 1;
            echo"The value of new Var is ";
            echo $Newvar ;
            echo "<br>" ;

            $Newvar = $Variable1;
            $Newvar /= 2 ;
            echo"The value of new Var is ";
            echo $Newvar ;
            echo "<br>" ;

            $Newvar = $Variable1;
            $Newvar *= 3;
            echo"The value of new Var is ";
            echo $Newvar ;
            echo "<br>" ;
            

            echo"The value of 1 == 4 is";
            echo var_dump(1==4);
            echo"<br>"


        ?>
        <?php
            echo"The value of 1 == 4 is";
            echo var_dump(1==4);
            echo"<br>";
        ?>
        <?php
        // increament / decreament
            echo"$Variable1";
            echo"<br>";
            echo $Variable1++ ;
            echo"<br>";
            echo"$Variable1";
            echo"<br>";
            echo ++$Variable1 ;
            echo"<br>";
            echo --$Variable1 ;
            echo"<br>";

        ?>
        <!-- Logical Operator
        and ( && ) both condition should be true
        or ( || )
        xor ( ! ) - if both true or false then output will be false   -->
        <?php
        $myVar = (true and true);
        echo"<br>";
        echo var_dump($myVar);
        echo"<br>"
        ?>

        <?php
        echo "This is again printed using php";
        echo"<br>";
        // 1.String
        // 2.Integer
        // 3.Float
        // 4.boolean
        // 5.Array
        // 6.Object
        // 7.Resource or null

        echo pi; // constant
        ?>



    </div>
</body>
</html>