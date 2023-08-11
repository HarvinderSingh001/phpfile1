
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="position:absolute;left:75%;top:0%;">
     <h1>Registration Form</h1>
     <form action="#" method="post">
     <table>
        <tr>
            <td>UserId</td>
            <td><input name="userId" type="text"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input name="name" type="text"></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input name="city" type="text" name="" id=""></td>
        </tr>
        <tr>
            <td>foreignId</td>
            <td><input name="foreignId" type="text"></td>
        </tr>
      
        <tr>
            <td>Address</td>
            <td><input name="address" type="text"></td>
        </tr>
        <tr>
            <td>PhoneNumber</td>
            <td><input name="phoneNumber" type="number"></td>
        </tr>
        <tr><td><button name="sub" type="submit">Submit</button>
        </td></tr>
     </table>
    </form>
   
    </div>
    <button><a href="crudJoin.php">Home</a></button>
</body>
</html>
<?php
  include_once('connection.php');
    die('insert');
  if(isset($_POST['sub'])){
     $userId=$_POST['userId'];
     $name=$_POST['name'];
     $city = $_POST['city'];
    //  echo $userId , $name ,$city;
     $queryInsert =  "insert into user values('$userId','$name','$city')";
     $resultInsert= mysqli_query($conn_user,$queryInsert);
     
     if($_POST['foreignId']){
        $foreignId = $_POST['foreignId'];
        $phoneNumber = $_POST['phoneNumber'];
        $address = $_POST['address'];
        // echo $foreignId , $phoneNumber , $address;
        $queryInsert = "insert into userDetail(foreignId,address,phoneNumber) values('$foreignId','$address','$phoneNumber');";
        $result= mysqli_query($conn_userDetail , $queryInsert);
        
     }
     if($result  || $resultInsert){
        header('location:display.php');
    }
     
  }

?>