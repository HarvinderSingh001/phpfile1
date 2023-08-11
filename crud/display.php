<!--<?php 
//  print_r($rows);

//  echo "<br>";
//  var_dump($u_select);
// foreach($rows as $r){
//      echo "<br>";
//      print_r($r);
    //  echo ($r[0][''] );
    // echo "<br>";
    // echo ($r['email'] );
    // echo "<br>";
    // echo ($r['password'] );
    // echo "<br>";
    // echo ($r['mobile'] );
    // echo "<br>";
// }?>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          a{
            color:red;
            text-decoration:none;
          }
          button{
            border:2px solid black;
            radius:67px;
            background-color:yellow;
          }
    </style>
</head>
<body>
    <table border=4px>
        <thead>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Mobile</td>
            <td>Operations</td>
        </thead>
        <tbody>
             <?php
             include ('connection.php');
             $select = 'select * from users';
             $u_select = mysqli_query($conn,$select);
            
              while( $rows = mysqli_fetch_assoc($u_select)){
                $id = $rows['Id'];
                $name = $rows['Name'];
                $email= $rows['Email'];
                $pass = $rows['Password'];
                $mobile=$rows['Mobile'];

                echo "<tr>
                         <td>$id</td>
                         <td>$name</td>
                         <td>$email</td>
                         <td>$pass</td>
                         <td>$mobile</td>
                         <td>
                              
                             <button> <a href='update.php?userid=$id'>Update</a></button>
                            
                              
                           <button>   <a href='delete.php?userid=$id'>Delete</a>
                           </button> 
                         </td>
                      </tr>";
             }
             
             ?>
        </tbody>
    </table>
    <button><a href='insert.php'>Add user</a></button>
</body>
</html>

