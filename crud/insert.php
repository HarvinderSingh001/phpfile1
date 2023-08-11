<?php
 include ('connection.php');
 if(isset($_POST['submit'])){
   $name=$_POST['user'];
   $email = $_POST['email'];
   $password=$_POST['password'];
   $mobile = $_POST['mobile'];
   $insert= "INSERT INTO `users` ( name, email, password , mobile) VALUES ( '$name', '$email','$password','$mobile');";
   $u_insert = mysqli_query($conn , $insert);
  //  print_r($u_insert);
   if($u_insert){
    echo "inserted successfully";
    header('location:display.php');
   }
   else{
    echo "insertion failed";
   }
 }
 

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
        <th>Username</th>
        <td><input type="text" name='user' placeholder='Enter your Name'/></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><input type="email" name='email' placeholder="enter your email" /></td>
      </tr>
      <tr>
        <th>Password</th>
        <td><input type="password" name='password' placeholder="enter your password" /></td>
      </tr>
      <tr>
        <th>Mobile</th>
        <td><input type="tel" name='mobile' placeholder="enter your number" /></td>
      </tr>
      <tr >
        <td><button name='submit' >Submit</button></td>
      </tr>
    </table>
</form>
  </body>
</html>
