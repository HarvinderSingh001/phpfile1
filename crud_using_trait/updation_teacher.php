<?php
  // $se = "select id from teacher";
  // $row_id = mysqli_query($conn)
  // if(isset($_POST['update'])){
  //   header('location:updation_teacher_form.html');
  // }
  // if(isset($_POST['update'])){
  // echo $id;
  // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <form action='updation_teacher_form.php' method= 'get'>
    <h1>Teacher Updation form </h1>
    ID Number<input type="number"  name="id" placeholder="Enter your id  number">
    <button type='submit'> Update</button>
</form>
</body>
</html>
