<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <table border=2>
      <h1>User</h1>
      <tr>
         <th>userId</th>
         <th>name</th>
         <th>city</th>
         <th colspan=2>operations</th>
      </tr>
      <?php
      include('connection.php');
      $query = "select *from user"; 
      $result = mysqli_query($conn_user , $query);
      while($rows = mysqli_fetch_assoc($result)){
         $userId = $rows['userId'];
         $name = $rows['name'];
         $city = $rows['city'];
         echo "<tr>
                <td>$userId</td>
                <td>$name</td>
                <td>$city</td>
                <td><a href='updateMain.php?userId=$userId'>update</a></td>
                <td><a href='delete.php?userId=$userId'>delete</a></td>
               </tr>";
      }
      ?>
   </table>
   <div style="position:absolute;left:30%;top:0%;">
   <table border=2 >
      <h1>UserDetail </h1>
      <tr>
         <th>id</th>
         <th>foreignId</th>
         <th>Address</th>
         <th>phoneNumber</th>
         <th colspan=2>Operations</th>
      </tr>
      <?php

      $query = "select *from userDetail"; 
      $result = mysqli_query($conn_user , $query);
      while($rows = mysqli_fetch_assoc($result)){
         $id = $rows['id'];
         $foreignId = $rows['foreignId'];
         $address = $rows['address'];
         $phoneNumber = $rows['phoneNumber'];
         echo "<tr>
                <td>$id</td>
                <td>$foreignId</td>
                <td>$address</td>
                <td>$phoneNumber</td>
                <td><a href='update.php?foreignId=$foreignId'>Update</a></td>
                <td><a href='delete.php?id=$id'>Delete</a></td>
               </tr>";
      }
      ?>
   </table>
   <button><a href="crudJoin.php">Home</a></button>
   </div>
</body>
</html>
