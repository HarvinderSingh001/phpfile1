<?php
   include('connection.php');
   if($_GET['id']){
   $id = $_GET['id'];
  $query = "delete from userDetail where id ='$id'";
  $result = mysqli_query($conn_userDetail , $query);
  if($result){
    header('location:display.php');
  }}
  if($_GET['userId']){
    $userId = $_GET['userId'];
  $query = "delete from user where userId ='$userId'";
  $result = mysqli_query($conn_user , $query);
  if($result){
    header('location:display.php');
  }
  }
?>