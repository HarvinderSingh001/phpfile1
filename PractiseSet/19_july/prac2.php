<?php
abstract class A {

    abstract function a( $a, $g );

}

class b extends A
 {
    abstract function a( $jb, $c )
 {
        echo 'ehllo';
    }
}

class c extends A
 {
    abstract function a( $jb, $c );
 }

$obj = new b();
$obj->a( 4, 5 );

?>