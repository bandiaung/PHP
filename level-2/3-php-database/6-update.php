<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "learndb9";

$connection = new mysqli($hostname, $username, $password,$database);


$data = "";

$data = "UPDATE students SET name='maung myint san', age=29, address='moe koung kin' WHERE id=3";

$connection->query($data);
// finish

// check


?>