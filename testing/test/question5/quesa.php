<?php
// values of  primary constants cannot  change  during  the program whether we want to change  

// values of magic constants change according to their  use 

define('num','23');
$num = 24;
echo num;
echo "<br>";

function a(){
    echo __FUNCTION__;
    echo  "<br>";
}
function b(){
    echo __FUNCTION__;
}
a();
b();


?>