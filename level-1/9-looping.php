<!-- 1.for loop -->
 <!-- ++ (incresement) -->
<!-- --(decreasement) -->

<?php 

for ($x = 1; $x <= 100; $x++){
  echo "$x. ";
}

?>
<hr>


 <!-- while loop -->

 <?php 

 $x = 1;
 while ($x <= 100){
  echo "$x ";
  $x++;
 }
 
 ?>
  <!-- do while -->
   <hr>

  <?php 

  $x = 1000;
  do{
    echo "$x ";
    $x++;

  }while($x <= 100);
  
  ?>
  <hr>
   <!-- foreach -->




   <?php 

for ($x = 1; $x <= 100; $x++){
  if($x % 2 == 0 ){
    echo "$x ";
  };
}
?>
<hr>

<!-- foreach -->

<?php 

$fruits = ['apple', 'orange','grape','banana' , 'mango'];

foreach($fruits as $fruit){
  echo "$fruit ";
}

?>
