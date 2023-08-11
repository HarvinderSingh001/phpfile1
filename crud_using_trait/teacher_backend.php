<?php
include ('backend.php');
 class Teacher {
    use Register ;
 }
 $obj = new Teacher();
 $obj->connection();

 if(isset($_POST['submit'])){
    $obj->insert($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['subject'],$_POST['address']);
    if($obj){
      echo "<script>alert('data inserted successfully')</script>";
    }
    $obj->select();
 }
  

 if(isset($_POST['view_all'])){
   
    $obj->select();
    if($obj){
      echo "<script>alert('successful')</script>";
    }
    else{
      echo "<script>alert('something went wrong!!')</script>";
    }
 }
 if(isset($_POST['updation'])){
   $obj->update($_GET['id'],$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['subject'],$_POST['address']);
   $obj->select();

   echo "<script>alert('data updated');</script>";
 }
 
//  print_r($_POST);



 
 if(isset($_POST['del'])){
 
   $obj->delete($_POST['id'],$_POST['table']);
 
   // $obj->delete(4,"teacher");
   echo "<script>alert('data deleted');</script>";
   $obj->select();
 }
?>