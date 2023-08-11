<?php

define('LOCATOR',   "/locator");

define('CLASSES',   LOCATOR."/code/classes");

define('FUNCTIONS', LOCATOR."/code/functions");

define('USERDIR',   LOCATOR."/user");
echo LOCATOR;
echo CLASSES;
?>


<?php
class A{
    const a = 4;
    function a(){
        echo 'class  a function invoked ';
    }
}
class B extends A{
    const a = 10 ;
    function b(){
        //const a ;  // error
        echo 'class b function is invoked ';
       // echo a;//erro  
        echo self::a ; // execute  
    }
}
$obj = new B();
echo $obj -> b(); 