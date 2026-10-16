<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "learndb9";

// server  chacke
$connection = new mysqli($hostname, $username, $password, $database);

$sql = "CREATE TABLE IF NOT EXISTS students(

id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
age INT NOT NULL,
address TEXT NULL
)";

$connection->query($sql);

// finish

// check 

if($sql == true){
  echo "success";
}else{
  echo "fali";
}





?>