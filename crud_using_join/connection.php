<?php
  $conn_user = mysqli_connect('localhost','root','','test');
  $conn_userDetail = mysqli_connect('localhost','root','','test');
  if($conn_user && $conn_userDetail){
    
  }
  else{
    die('connection not established');
  }

?>