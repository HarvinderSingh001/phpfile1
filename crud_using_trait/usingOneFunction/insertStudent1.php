
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='#' method='post'>
    <h1>Student registeration form </h1>
    <table>
        <tr><td>Name</td>
        <td><input type="text" name="user"></td></tr>
        <tr><td>Email</td>
        <td><input type="email" name="email"></td></tr>
        <tr><td>Roll No</td>
        <td><input type="text" name="rollno"></td></tr>
        <tr><td>Phone Number</td>
        <td><input type="text" name="phone"></td></tr>
        <tr><td><button type='submit' name="submit">Submit</button></td></tr>
    </table>
</form>
</body>
</html>
<?php
 
 if(isset($_POST['submit'])){
   include ('twoInOne.php');
   $arr[0]=$_POST['user'];
   $arr[1]=$_POST['email'];
   $arr[2]=$_POST['rollno'];
   $arr[3]=$_POST['phone'];
   $table = 'students';
   insert($table,  $arr);
 }

?>


