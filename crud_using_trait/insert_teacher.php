<?php
 
//  if(isset($_POST['submit'])){
//    $name=$_POST['name'];
//    $email = $_POST['email'];
//    $phone=$_POST['phone'];
//    $address = $_POST['address'];
//    $insert= "INSERT INTO `users` ( name, email, phone , address) VALUES ( '$name', '$email','$phone','$address');";
//    $u_insert = mysqli_query($conn , $insert);
//   //  print_r($u_insert);
//    if($u_insert){
//     echo "inserted successfully";
//     header('location:display.php');
//    }
//    else{
//     echo "insertion failed";
//    }
//  }
include ('teacher_backend.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="#"  method='post' >
    <table rowspan="3">
      <tr>
        <th>Name</th>
        <td><input type="text" name='name' placeholder='Enter your Name'/></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><input type="email" name='email' placeholder="enter your email" /></td>
      </tr>
      <tr>
        <th>Phone Number</th>
        <td><input type="tel" name='phone' placeholder="enter your Phone Number" /></td>
      </tr>
      <tr>
        <th>Subject</th>
        <td><input type="text" name='subject' placeholder="enter your Subject Name" /></td>
      </tr>
      <tr>
        <th>Address</th>
        <td><input type="text" name='address' placeholder="enter your Address" /></td>
      </tr>
      <tr >
        <td><button name='submit' >Submit</button></td>
      </tr>
      <button><a href="add_student.php">Go to Student Registration</a></button>
      <button><a href='add_teacher.php'>Go to Teacher Registration</a></button>
    </table>
</form>
  </body>
</html>