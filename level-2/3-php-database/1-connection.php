<?php 

$hostname = "localhost";
$username = "root";
$password = "";

$connection = new mysqli($hostname, $username, $password);

// finish

// check

if($connection->connect_error){
  echo "Connection Failed";
}else{
  echo "sccess";
}

?>