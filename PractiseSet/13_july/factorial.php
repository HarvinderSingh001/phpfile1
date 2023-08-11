<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method='post'>
        <h1>Factorial of a Number</h1>
        Enter the number <input type='number' name="num">
        <button type="submit" name='sub'>factorial</button>
    </form>

</body>
</html>
<?php
 if(isset($_POST['sub'])){
    $a=$_POST['num'];
    function fact($b){
        if($b==1){
            return 1;
        }
        else{
            return $b*fact($b - 1);
        }
    }
    $result = fact($a);
    echo "factorial of $a is " . $result;
}

?>