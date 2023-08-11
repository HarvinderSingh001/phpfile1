<?php
if(isset($_POST['del'])){
 echo $_POST['id'];
 echo $_POST['table'];
 include ('teacher_backend.php');
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
    <form action='#' method= 'post'>
    <h1>Teacher Deletion form </h1>
    ID Number<input type="text"  name='id' placeholder="Enter your id  number">
    Table Name<input type='text' name='table' placeholder="Enter table name">
    <button type='submit' name='del' >Delete</button>
    <button><a href="add_student.php">Go to Student Registration</a></button>
    <button><a href='add_teacher.php'>Go to Teacher Registration</a></button>
</form>
</body>
</html>
<?php
 
  // if(isset($_POST['del'])){
  //   $id = $_GET['id'];
  //   $table=$_GET['table'];
    
  //   // header('location:teacher_backend.php?userid='.$id.'&tablename='.$table);
  // }
?>
