<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Hey There ! ! <br>
        This is Shanto.
    </h1>
    <?php
        echo("First PHP code.");
        echo("<br>");
         
    ?>

    <?php
        //Variable declare 
        $name = 'Al Shahriar';
        $id = 221002566 ;
        echo($name); 
        echo("<br>");
        echo($id); 
        echo("<br>");

        //Arithmatic Oparetion
        $num1 = 11; 
        $num2 = 2; 
        echo("Sumation of 11 $ 2 = ");
        echo($num1 + $num2);
        echo("<br>");
        echo("Mod of 11 $ 2 = ");
        echo($num1 % $num2);
        echo("<br>");

        //Assignment Oparation
        $num2 *= $num2 ;
        echo("calculate 2 *= 2  =>");
        echo($num2);
        echo("<br>");

        //conditional oparetor
        echo("value of 6==7  =>");
        echo var_dump(6==7);
        echo("<br>");
        echo("value of 6!=7  =>");
        echo var_dump(6!=7);
        echo("<br>");
        echo("value of 6<=7  =>");
        echo var_dump(6<=7);
        echo("<br>");
        echo("value of 6>=7  =>");
        echo var_dump(6>=7);
        echo("<br>");

        //Increment ++ & Decrement --
        //Logical oparetor (&& , || , xor , !)

        

        echo("<br>");
        echo("Thank you for seeing..."); 
    ?>
    </div>
</body>
</html>