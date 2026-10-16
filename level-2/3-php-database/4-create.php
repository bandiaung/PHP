<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "learndb9";

$connection = new mysqli($hostname, $username, $password, $database);

$data = "INSERT INTO students(name,age,address) VALUES('aung pyae', 35, 'gongon')";
$connection->query($data);

// finish

// check


?>