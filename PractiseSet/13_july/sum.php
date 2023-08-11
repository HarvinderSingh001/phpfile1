<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
    <h1>Sum of two Numbers</h1>
    Enter first Number<input type="number" name="first" >
    Enter second Number<input type="number" name="second">
    <button type="submit" name="sum"> Sum </button>
</form>
</body>
</html>
<?php
  if(isset($_POST['sum'])){
    $a = $_POST['first'];
    $b = $_POST['second'];
    $sum = $a + $b;
    echo "sum of $a and $b  is  $sum";
  }

?>