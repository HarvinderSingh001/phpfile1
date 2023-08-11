<?php
include ('teacher_backend.php');

?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <form action = '#' method= 'post'>
    <h1>Teacher Registration form</h1>
    <br>
    <button><a href="insert_teacher.php" >Add Teacher</a></button>
    <button name="view_all">View all</button>
     
    <button><a href="updation_teacher.php" name='btnupdate'>Update</a></button>
    
    <button><a href="delete_teacher.php">Delete</a></button>
    
    <button><a href="add_student.php">Go to Student Registration</a></button>
    
    
</form>
</body>
</html>
