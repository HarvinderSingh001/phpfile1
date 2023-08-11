<?php
 include ('connection.php');
 $id=$_GET['userid'];
 echo $id;
 $delete = "DELETE FROM users WHERE Id=$id";
 $u_delete = mysqli_query($conn,$delete);
 if($u_delete){
    echo "Your id has been deleted";
    header('location:display.php');    
 }

 else{
  echo "try again";
 }
?>