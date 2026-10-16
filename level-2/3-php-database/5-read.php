<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "learndb9";


$connection = new mysqli($hostname, $username, $password, $database);

$data = "SELECT * FROM students";
$raw_data = $connection->query($data);

while(list($id,$name,$age,$adress) = mysqli_fetch_array($raw_data)){
  echo "ID : $id <br>";
  echo "Name : $name <br>";
  echo "Age : $age <br>";
  echo "Address : $address <br><br>";
}

?>