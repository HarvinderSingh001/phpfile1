
<?php
 class A {

    public static function foo() {
        echo "this is class foo ".__CLASS__;
        echo "<br>";
        static::who();

    }


// A::foo()
// c::test()->a::foo()-->static who()
// c::test()->parent::foo()-->static who()
// c::test()->self::foo()-->static who()

    public static function who() {
        echo "this is class A who ";
        echo "<br>";
        echo __CLASS__."\n";
        echo "<br>";

    }

}




class B   {


    public static function test() {
         
        echo "this is class b test";
        echo "<br>";
        A::foo();

        parent::foo();

        self::foo();

    }




    public static function who() {
        echo "this is class B who ";
        echo "<br>";
        echo __CLASS__."\n";
        echo "<br>";

    }

}

class C extends B {

    public static function who1() {
        echo "this is class C who ";
        echo  "<br>";
        echo __CLASS__."\n";
        echo "<br>";

    }

}
C::test();
?>