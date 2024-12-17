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

        $x = 5;
        echo $x;
        $txt = "W3Schools.com";
        echo "I love " . $txt . "!";


        echo("<br>");
        echo("Thank you for seeing...<br>"); 
    ?>

    <?php
    // if else
        $time = 24; //date("H");

        if($time>22 || $time<5){
            echo "Good Night ! ! <br>";
        }
        elseif($time>5 || $time<10){
            echo "Good Morning ! ! <br>";
        }
        elseif($time>10 || $time<14){
            echo "Good Noon ! ! <br>";
        }
        else{
            echo "Good Afternoon ! ! <br>";
        }
    ?>

    <?php
        //Function
        function sum(int $x, int $y){
            $z = $x + $y ;
            return $z;
        }

        echo "Sum of 5 & 9 = ".sum(5,9)."<br>";
        echo "Sum of 9 & 16 = ".sum(16,9)."<br>";

    ?>

    </div>
</body>
</html>