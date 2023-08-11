<?php

class A {
    private $a = 4;

    function __get( $property ) {
        if ( property_exists( __class__, $property ) ) {
            echo   $this->property;
        } else {
            Echo 'you try to access undefined  property';

        }
    }
}
$obj = new A();
echo $obj->a;
?>
