<!-- connect PHP file -->
<?php
$username = "root";        
$password = "";            
$database = "student";      
$port = 3306; 
$mysqli = new mysqli('localhost', $username, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error . '<br><br>');
}

echo 'Connected successfully <br><br>';
?>  