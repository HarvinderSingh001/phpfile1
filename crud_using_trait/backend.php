
<?php
 trait Register{
    var $conn;
  public  function connection(){
    global $conn;
    $conn = mysqli_connect('localhost','root','','registration');
    if($conn){
        echo "Connection successful";
    }
  }
  public function insert( $name1 , $email1 , $phone1 ,$subject1, $address1){
        global $conn;
        $insert="INSERT INTO `teacher`( `Name`, `Email`, `Phone_Number`,`subject`, `Address`) VALUES ('$name1','$email1','$phone1','$subject1','$address1')";
        $result=mysqli_query($conn , $insert);
     }
  public function insert_student($name,$roll ,$email , $phone){
       global $conn;
       $insert = "insert into students (Name , Roll_No , Email , Phone_Number)
       Values('$name' ,' $roll' , '$email' ,'$phone')";
       $result= mysqli_query($conn , $insert);
       if($result){
        echo "inserted successfully";
       }
       else{
        echo "something happens wrong";
       }
  }
  public function select(){
   global $conn;
   $select = "select *from teacher";
   $result = mysqli_query($conn , $select);
  echo " 
<html>
<head></head>
<table border='px'>
  <thead>
  <th>Id</th>
  <th>Name</th>
  <th>Email</th>
  <th>Phone Number</th>
  <th>Subject</th>
  <th>Address</th>
  </thead>  ";
   
   while($rows=mysqli_fetch_assoc($result)){
      $id = $rows['Id'];
      $name=$rows['Name'];
      $email=$rows['Email'] ;
      $phone = $rows['Phone_Number'];
      $subject= $rows['Subject'];
      $address=$rows['Address'];
    echo " <tr>  
        <td> $id</td>
        <td>  $name  </td>
        <td>  $email </td>
        <td>  $phone</td>
        <td>  $subject </td>
        <td>  $address </td>
      </tr>";
   }
   echo "
  </table>


      </html>";
  }

  function select_student(){
      global $conn;
      $select = "select * from students";
      $result = mysqli_query($conn,$select);
     echo " 
   <html>
   <head></head>
   <table border='px'>
     <thead>
     <th>Id</th>
     <th>Name</th>
     <th>Roll No</th>
     <th>Email</th>
     <th>Phone Number</th>
     
     </thead>  ";
      
      while($rows=mysqli_fetch_assoc($result)){
         $id = $rows['Id'];
         $name=$rows['Name'];
         $roll=$rows['Roll_No'] ;
         $email = $rows['Email'];
         $phone=$rows['Phone_Number'];
       echo " <tr>  
           <td> $id</td>
           <td>  $name  </td>
           <td>  $roll </td>
           <td>  $email</td>
           <td>  $phone </td>
         </tr>";
      }
      echo "
     </table>
         </html>";
     
  }

  function update($id ,$name,$email,$phone,$subject,$address){
    global $conn;
    $result = "update teacher set Name ='$name',Email='$email' , Phone_Number='$phone' , Subject = '$subject ', Address = '$address' where Id='$id'";
    $update = mysqli_query($conn , $result);
    if($update){
      echo"your data has been updated successfully";
  }
}
  
  function update_student($id,$name,$email,$roll,$phone){
    global $conn;
    $result = "update students set Name ='$name',Email='$email' , Phone_Number='$phone' , Roll_No = '$roll' where Id='$id'";
    $update = mysqli_query($conn , $result);
    if($update){
      echo"your data has been updated successfully";
  }
}

function delete($id , $table){
  global $conn;
   $name = 'students';
   if($table=='teacher'){
    $name = 'teacher';
  }
    $del = "Delete from $name where Id = '$id'";
    $result = mysqli_query($conn , $del);
    if($result){
      echo  "data deleted successfully";
    }
    else{
      echo "cannot  delete right now";
    }
}
}
 

