<?php 
include('display.php'); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="#" method="post">
    <table>
        <tr>
            <td><button name="left">Left Join</button></td>
            <td><button name="inner">Inner Join</button></td>
            <td><button name="right">Right Join</button></td>
            <td><button name="insert">Insert</button></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
  if(isset($_POST['left'])){
    header('location:leftJoin.php');
  }
  if(isset($_POST['right'])){
    header('location:rightJoin.php');
  }
  if(isset($_POST['insert'])){
    // die('here');
    header('location:insert.php');
  }
  if(isset($_POST['inner'])){
    header('location:innerJoin.php');
  }
?>