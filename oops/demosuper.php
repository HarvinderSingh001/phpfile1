<?php
//    print_r($_GET);
//    echo "<br>";
//    echo ($_GET['user']);
//    echo ($_GET['pass']);
// print_r($_COOKIE);
// print_r($_SERVER);
// foreach($_SERVER as $k=> $a){
//     echo "$k.($a)"."<br>";
// }
session_start();
$_SESSION['name']="my name is harvinder singh";
print_r($_SESSION);
?>