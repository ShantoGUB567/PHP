<?php
$username = "root";        
$password = "";            
$database = "connect";      
$port = 3306; 
$mysqli = new mysqli('localhost', $username, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

echo 'Connected successfully';
?>