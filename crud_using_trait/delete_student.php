<?php
include ('student_backend.php');
if(isset($_POST['hi'])){
    echo "my name is harvinder singh";
}
if(isset($_POST['del1']))
{
 echo "hello";
 echo $_POST['id'];
 echo $_POST['table'];
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
    <h1>Student Deletion form </h1>
    ID Number<input type="text"  name="id" placeholder="Enter your id  number">
    Table Name<input type='text' name='table' placeholder="Enter table name">
    <button type='submit' name="del1" >Delete</button>
    <button name="hi">What is your Name ?? </button>
    <button><a href="add_student.php">Go to Student Registration</a></button>
    <button><a href='add_teacher.php'>Go to Teacher Registration</a></button>
</form>
</body>


