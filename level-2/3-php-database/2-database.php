<?php 

$hostname = "localhost";
$username = "root";
$password = "";

// server  chacke
$connection = new mysqli($hostname, $username, $password);


//data base create
$sql = "CREATE DATABASE IF NOT EXISTS learndb9";
$connection->query($sql);

// table create


// finish

//check

if($connection == true){
  echo "create successful";
}else{
  echo "Error creating database";
}


?>