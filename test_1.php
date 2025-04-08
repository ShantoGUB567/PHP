<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test_1</title>
</head>
<body>
    <?php
    $name = "Shanto";
    ?>

    <h1>This is a PHP Test</h1>
    <?php
        for($i=1; $i<=10; $i++){
            echo "<p>The value of i = $i</p>";
        }

        for($i=1; $i<=6; $i++){
            echo "<h$i>This is heading- $i</h$i> ";
        }

        echo $name; 
    ?>
    
</body>
</html>