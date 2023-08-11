<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<?php
 $name = $_COOKIE['user'];
 setcookie('user','harvinde singh',time() + 10);

$a = 'hi';
$b = 'jarodi yamunanagar';
$n = $_COOKIE[$a];
setcookie($a,$b,time()+10);
// ?>
</body>
</html>

// <?php  
// setcookie("user", "Sonoo");  
// ?>  
<!-- // <html>  
// <body>   -->
// <?php  
// if(!isset($_COOKIE["user"])) {  
//     echo "Sorry, cookie is not found!";  
// } else {  
//     echo "<br/>Cookie Value: " . $_COOKIE["user"];  
// }  
// ?>
