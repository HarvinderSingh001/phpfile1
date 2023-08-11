<?php
// echo include(__DIR__);
// // echo include(__FILE__)//trapped in loop 
// echo __FILE__;
// echo "<br>";
// echo __DIR__;
// echo "<br>";
// echo defined(__FILE__);
namespace Apple {
    class A{
    function a(){
        echo  __CLASS__;
        echo "<br>";
        echo __LINE__;
        echo "<br>";
        echo __FUNCTION__;
        echo "<br>";
        echo __METHOD__;
        echo "<br>";
        echo "namespace constant";
        echo __NAMESPACE__;
        echo "<br>";
        echo A::class ;// className::class
    }
}
    $obj =  new A();
    $obj->a();

}

?>