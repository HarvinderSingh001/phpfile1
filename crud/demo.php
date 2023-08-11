<?php
 include ('connection.php');
 $select = "Select * from users ";
 $result = mysqli_query($conn , $select);
//  print_r($result);
//  echo "<br>";
//  var_dump($result);
 $data = mysqli_fetch_assoc($result);
 echo "<br>";
 print_r($data);
 echo "<br>";
$data= mysqli_fetch_assoc($result);
print_r($data);
//  var_dump($data);
echo "<br>";
$data= mysqli_fetch_assoc($result);
print_r($data);
echo "<br>";
$data= mysqli_fetch_assoc($result);
print_r($data);


?>