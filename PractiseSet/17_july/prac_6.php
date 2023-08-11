<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="#" method="post">
     Enter the username <input type="text" name="user" /><br>
     Enter the password <input type="password" name="password"/><br>
      <input type="submit" name="submit" value='login' />
    </form>
  </body>
</html>
<?php
global $flag;
   if(isset($_POST['submit'])){
      $name =$_POST['user'] ;
      $pass =$_POST['password'];
      $conn = mysqli_connect('localhost','root','','name');
      $select = 'select * from login ';
      $result = mysqli_query($conn , $select);
      while($row=mysqli_fetch_assoc($result)){
        global $flag;
        $flag= 0;
        if($name==$row['username']){
          $flag = 1;
        }
        if($pass==$row['password']){
          $flag = 2;
        }
        
      } switch($flag){
        case '0':
          echo "Invalid username and password";
          break;
        case '1':
          echo "Your password is wrong";
          break;
      
      }
   }

?>
