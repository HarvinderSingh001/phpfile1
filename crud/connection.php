<?php
 $conn = mysqli_connect('localhost','root','','crud');
 if($conn){
    echo "connection established";
 }
 else{
    die($conn);
 }
 
?>