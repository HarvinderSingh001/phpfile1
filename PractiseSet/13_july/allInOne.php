<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method='post'>
        <h1>All in one form</h1>
        Enter factorial number <input type='number' name="fac"> 
            
        Enter the pattern number <input type='number' name="patt">
           
        Enter first Number<input type="number" name="first" >
        Enter second Number<input type="number" name="second">
            <button type="submit" name="all"> Sum </button>
            
    </form>
</body>
</html>
<?php
 if(isset($_POST['all'])){
    $a=$_POST['fac'];
    function fact($b){
        if($b==1){
            return 1;
        }
        else{
            return $b*fact($b - 1);
        }
    }
    $result = fact($a);
    echo "<h1>factorial </h1>";
    echo "factorial of $a is " . $result;
    echo "<br>";
}
if(isset($_POST['all'])){
    echo"<h1>pattern</h1>";
    $a=$_POST['patt'];
    for($i=0;$i<$a;$i++){
        for($j=0;$j<$i+1;$j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";
  }
  if(isset($_POST['all'])){
    echo "<h1>sum</h1>";
    $a = $_POST['first'];
    $b = $_POST['second'];
    $sum = $a + $b;
    echo "sum of $a and $b  is  $sum";
  }

?>