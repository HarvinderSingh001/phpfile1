<?php
   include('connection.php');

  //  include('display.php');
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div style="position:absolute;left: 50%;top:0%">
  <h1>Right join</h1>
  <table border=2>
    <tr>
      <th>$userId</th>
      <th>name</th>
      <th>city</th>
      <th>address</th>
      <th>address</th>
    </tr>
    <?php
  
  $innerJoin = "select * from user right join userDetail on user.userId = userDetail.foreignId";
  $result = mysqli_query($conn_user , $innerJoin);
  if($result){
    while($rows = mysqli_fetch_assoc($result)){
        $userId = $rows['userId'];
        $name = $rows['name'];
        $city = $rows['city'];
        $address = $rows['address'];
        $phoneNumber = $rows['phoneNumber'];
        echo "<tr><td>$userId</td>
        <td>$name</td>
        <td>$city</td>
        <td>$address</td>
        <td>$phoneNumber</td></tr>";
    }
    
  }
  else{
    echo "something happens wrong";
  }
?>  
  </table>
  <button><a href="crudJoin.php">Home</a></button>
  </div>
  
</body>
</html>

