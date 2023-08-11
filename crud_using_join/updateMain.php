<?php
   include('connection.php');
   $userId = $_GET['userId'];
   $query = "select *from  user where userId  = '$userId'";
   $result = mysqli_query($conn_user , $query );
   $row = mysqli_fetch_assoc($result);
   $nameValue = $row['name'];
   $cityValue = $row['city'];
   if(isset($_POST['update'])){
   $name = $_POST['name'];
   $city = $_POST['city'];
   $query = "update user set name ='$name' , city = '$city' where   userId = '$userId'";
   $result = mysqli_query($conn_user , $query);
   if($result){
      header('location:display.php');
   }
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
    <form action="#" method='post'>
        <table>
           
            <tr>
                <td>name</td>
                <td><input value="<?php echo $nameValue;?>" name="name" type="text"></td>
            </tr>
            <tr>
                <td>city</td>
                <td><input value="<?php echo $cityValue;?>" type="text" name='city'></td>
            </tr>
            <tr>
                <td><button type = 'submit' name = "update">Update</button></td>
              
            </tr>
        </table>
    </form>
</body>
</html>