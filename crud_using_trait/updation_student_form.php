<?php
echo $_GET['sid'];
include('student_backend.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#"  method='post' >
        <table rowspan="3">
          <tr>
            <th>Name</th>
            <td><input type="text" name='name' placeholder='Enter your new Name'/></td>
          </tr>
          <tr>
            <th>Email</th>
            <td><input type="email" name='email' placeholder="enter your new email" /></td>
          </tr>
          <tr>
            <th>Roll No.</th>
            <td><input type="tel" name='roll' placeholder="enter your new Phone Number" /></td>
          </tr>
          <tr>
            <th>Phone Number</th>
            <td><input type="text" name='phone' placeholder="enter your new Subject Name" /></td>
          </tr>
          <tr>
           
          <tr >
            <td><button type='submit' name='updation1' >updation</button></td>
          </tr>
          <button><a href='add_teacher.php'>Go to Teacher Registration</a></button>
          <button><a href="add_student.php">Go to Student Registration</a></button>
        </table>
    </form>
</body>
</html>
