
<?php
   include ('backend.php');
   if(isset($_POST['updation1'])){
      echo $_GET['sid'];
      }
   class Students{
   use Register;
   }
   $obj = new Students();
   if(isset($_POST['submit1'])){
      $obj->connection();
      $obj->insert_student($_POST['user'],$_POST['rollno'],$_POST['email'],$_POST['phone']);
      $obj->select_student();
      echo "<script>alert('data inserted successfully')</script>";
   }
   if(isset($_POST['view1'])){
    $obj->connection();
    $obj->select_student();

   }
   if(isset($_POST['updation1'])){
      $obj->connection();
      $obj->update_student($_GET['sid'],$_POST['name'],$_POST['email'],$_POST['roll'],$_POST['phone']);
      $obj->select_student();
      echo "<script>alert('data updated successfully')</script>";
   }
   
   if(isset($_POST['del1'])){
      $obj->connection();
      $obj->delete($_POST['id'],$_POST['table']);
      $obj->select_student();
      echo "<script>alert('data deleted successfully')</script>";
   }
   // $obj->connection();
   // $obj->delete(7,'students');
?>
