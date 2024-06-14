<?php
$host = 'localhost';
$dbname = 'mydb';
$username = 'your_username';
$password = 'your_password';

try{
    $conn = new PDO("mysql:host=$host; dbname=$dbname" , $username, $password);
} catch (PDOException $e){
    die("Unable to connect to database $dbname: " . $e->getMessage());
}
?>
