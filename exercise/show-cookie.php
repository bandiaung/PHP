<h1>Customer preference</h1>

<?php 
$name = $_POST['name'];
$age = $_POST['age'];
$budget = $_POST['budget'];
$type = $_POST['type'];
$save = $_POST['save'];



if(isset($save)){
  // for age
  if($age >= 18){
    echo "Adult Collection";
  }else{
    echo "Young Collection";
  }

  echo "<hr>";


  // for budget
  if($budget >= 200){
    echo "Premium Collection";
  }else if($budget >= 150){
    echo "Signature Collection";
  }else if($budget >= 100){
    echo "Affortable Collection";
  }else{
    echo "you can check for decant";
  }
  echo "<hr>";
}

setcookie("name", "$name", time() + 60*60);
setcookie("age", "$age", time() + 60*60);
setcookie("budget", "$budget", time() + 60*60);
?>

<!-- for cookie -->
 <?php 
 echo $_COOKIE['name'];
 echo "<hr>";
 echo $_COOKIE['age'];
  echo "<hr>";

 echo $_COOKIE['budget']; 
 echo "<hr>";

 echo $_COOKIE['name']; 
 echo "<hr>";


 ?>