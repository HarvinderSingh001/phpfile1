<?php
  include('connection.php');
  $foreignId = $_GET['foreignId'];
  $query = "select *  from userDetail where foreignId = '$foreignId'";
  $result = mysqli_query($conn_userDetail , $query);
  $row = mysqli_fetch_assoc($result);
  $address = $row['address'];
  $phoneNumber =  $row['phoneNumber'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <table>
            <tr>
                <td>foreignId</td>
                <td><input value="<?php echo $_GET['foreignId'];?>" type="text">
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input name='address' value="<?php echo  $address ;?>" type="text"></td>
            </tr>
            <tr>
                <tr><td>id</td>
            <td><input  name='id' type="text"></td></tr>
            </tr>
            <tr>
                <td>phoneNumber</td>
                <td><input value="<?php echo $phoneNumber ;?>" name = 'phoneNumber' type="number"></td>
            </tr>
            <tr><td><button type = 'submit' name='update'>Update</button></td></tr>
        </table>
    </form>
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['update'])){
 
 $foreignId =  $_GET['foreignId'];
 $id=$_POST['id'];
 $phoneNumber = $_POST['phoneNumber'];
 $address = $_POST['address'];
 $query =  "UPDATE `userdetail` SET address= '$address',`phoneNumber`='$phoneNumber',`foreignID`='$foreignId' where id = '$id'";
 $result = mysqli_query($conn_userDetail , $query);
 header('location:display.php');
//  if($result){
//     echo "updated successfully;
//  }
}   
?>