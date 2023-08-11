<?php
 $id = $_GET['userid'];
 include ('connection.php');
 $select = "Select * from users where Id = $id";
 $result = mysqli_query($conn,$select);
 $data = mysqli_fetch_assoc($result);
 
 if(isset($_POST['submit'])){

 echo $id;
 $user = $_POST['user'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $mobile = $_POST['mobile'];
 $update = "UPDATE users SET Name='$user',Email='$email',Password='password',Mobile='$mobile' WHERE Id=$id";

$u_update = mysqli_query($conn , $update);
// print_r($u_update);
header('location:display.php');
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
    <form action='#'   method='post' >
    <table rowspan="3">
      <tr>
        <th>Username</th>
        <td><input type="text" name='user' value='<?php echo $data['Name']?>' placeholder="enter your new name" /></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><input type="email" name='email' value='<?php echo $data['Email']?>' placeholder="enter your new email" /></td>
      </tr>
      <tr>
        <th>Password</th>
        <td><input type="password" name='password' value='<?php echo $data['Password']?>' placeholder="enter your new password" /></td>
      </tr>
      <tr>
        <th>Mobile</th>
        <td><input type="tel" name='mobile' value='<?php echo $data['Mobile']?>' placeholder="enter your new number" /></td>
      </tr>
      <tr >
        <td><button name='submit'>Submit</button></td>
      </tr>
    </table>
</form>
<?php ?>
</body>
</html>
