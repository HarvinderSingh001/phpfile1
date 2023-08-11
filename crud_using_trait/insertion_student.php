<?php
//    include ('student_backend.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='student_backend.php' method='post'>
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
        <tr><td><button type='submit' name="submit1">Submit</button></td></tr>
        <button><a href="add_student.php">Go to Student Registration</a></button>
        <button><a href='add_teacher.php'>Go to Teacher Registration</a></button>
    </table>
</form>
</body>
</html>



