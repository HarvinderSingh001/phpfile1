<?php
//  const a = 'harvinder';
//  define('a' , 'hello');
//  echo A;
//  define('__foo__' , 'hi');
//  echo __foo__;
function b(){
    echo "hello";
}

//function cannot be defined in a variable but can be called inside the variable 
$a =  b();
echo $a;
?>