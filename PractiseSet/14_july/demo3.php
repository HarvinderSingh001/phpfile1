<?php

class A {
    static function b() {
        echo __CLASS__;
    }
    static function  a() {
        echo __CLASS__;
        static::b();
    }

}

class B extends A {

    static function b() {

        echo __CLASS__;
    }

    static function test() {
        parent::a();

        echo '<br>';
        static::a();
    }
}

class c extends B {
    static function  a() {
        echo __CLASS__;
    }
    static function  b() {
        echo __CLASS__;
    }

}

C::test();

?>