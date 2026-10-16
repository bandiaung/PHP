<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "learndb9";


$connection = new mysqli($hostname, $username, $password, $database);

$data = "DELETE FROM students WHERE id=4";



?>