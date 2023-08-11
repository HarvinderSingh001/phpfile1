


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="#"  method='post' >
    <table rowspan="3">
      <tr>
        <th>Name</th>
        <td><input type="text" name='name' placeholder='Enter your Name'/></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><input type="email" name='email' placeholder="enter your email" /></td>
      </tr>
      <tr>
        <th>Phone Number</th>
        <td><input type="tel" name='phone' placeholder="enter your Phone Number" /></td>
      </tr>
      <tr>
        <th>Subject</th>
        <td><input type="text" name='subject' placeholder="enter your Subject Name" /></td>
      </tr>
      <tr>
        <th>Address</th>
        <td><input type="text" name='address' placeholder="enter your Address" /></td>
      </tr>
      <tr >
        <td><button name='submit' >Submit</button></td>
      </tr>
    </table>
</form>
  </body>
</html>
<?php
   if(isset($_POST['submit'])){
     include ('twoInOne.php');
     $arr[0]=$_POST['name'];
     $arr[1]=$_POST['email'];
     $arr[2]=$_POST['phone'];
     $arr[3]=$_POST['subject'];
     $arr[4]=$_POST['address'];
     $table = 'teacher';
     insert($table,  $arr);
   }

?>