<?php
  $conn=mysqli_connect('localhost','root','','crud');
  $create = 'create table  if not exists users(username varchar(40),email varchar(50) unique,password varchar(10))';
  $table_c = mysqli_query($conn,$create);
  // if(isset($table_c)){
  //   echo "table is created with username";
  // }
  $user = $_POST['user'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $insert = " insert if not  exists into users(username, email , password ) 
              values('$user','$email ' , '$pass');";
     $insert =  mysqli_query($conn,$insert);
  if(isset($insert)){
    echo "your data is inserted ";
  }
  $update = "update users set username = $user , email = $email , password = $pass";
  $select = mysqli_fetch_assoc($insert);
  while($rows = $select){
   echo  $rows['username'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>insertion</h1>
    <form action="#" method="POST">
    USERNAME<input type="text" name="user"><br>
    EMAIL<input type="text" name="email"><br>
    PASSWORD<input type="password" name="pass" ><br>
    <input type="submit" value="submit" name="submit"><br>
  
    
    <h1>updation </h1>
    <input type = "text"  name = 'update'   name = 'up_email' placeholder='email'>
</form>
</body>
</html>
<?php
    // if(isset($_POST['submit'])){
    //  if($_POST['user']!=null && $_POST['email']!=null $_POST['pass']!=null){
    //   echo "login successful ";
    // }
    // echo "successful login ";
    // }
    // if($_POST['submit']){
    //   echo " login successful "."<br>";
    // }
   
?>