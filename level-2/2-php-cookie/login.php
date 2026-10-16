<?php 
error_reporting(1);
  $name = $_POST['name'];
  $password = $_POST['password'];
  $submit = $_POST['submit'];
  $remember = $_POST['remember'];
  if(isset($submit)){
    if($name == "admin" && $password == "1234"){
      if($remember == true){
        setcookie("cname", $name, time() + 60);
        setcookie("cpassword", $password, time() + 60);
      }
      header('location:welcome.php');

    }else{
      echo "<p style='color:red'>Invalid Credentials!</p>";
    }
  }
?>

<form method="POST">

  <input type="text" value="<?php echo $_COOKIE['cname'] ?>" name="name" placeholder="enter your name"><br><br>
  <input type="password"  value="<?php echo $_COOKIE['cpassword'] ?>" name="password" placeholder="password"><br><br>
  <input type="checkbox"name="remember">remember me<br><br>
  <button type="submit" name="submit"> login </button>

</form>