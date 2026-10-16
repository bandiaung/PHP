<?php
error_reporting(1);

$submit = $_POST['submit'];
// nout kah 'submit' gyi kah button gyi
$name = $_POST['name'];
// nout kah 'name' gyi kah input gyi


// isset = 'click'//
if(isset($submit)){
  if(!empty($name)){
    if(strlen($name) >= 5){
          if($name == `$name@gmail.com`){
            echo "<p style='color:green;'>hello $name</p>";
          }else{
            echo "<p style='color:red;'>wrong username</p>";
          }

    }else{
          echo "<p style='color:red;'>name must be at least 5 charector long</p>";

    }
  }else{
    echo "<p style='color:red;'>name require</p>";

  }
}

?>

<form method="POST">
  <input type="text" name="name" placeholder="Enter your Name">
  <button type="submit" name="submit">Show my name</button>
</form>
