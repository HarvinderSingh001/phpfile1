<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
    <h1>Pattern function</h1>
    Enter the  number <input type="number" name="num">
    <button type="submit" name="sub">submit</button>
</form>
</body>
</html>
<?php
  if(isset($_POST['sub'])){
    $a=$_POST['num'];
    for($i=0;$i<$a;$i++){
        for($j=0;$j<$i+1;$j++){
            echo "*";
        }
        echo "<br>";
    }
  }

?>