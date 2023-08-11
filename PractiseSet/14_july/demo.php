<?php

class A {

    public  function foo() {
        echo __CLASS__;
        $this->who();

    }

    public  function who() {

        echo __CLASS__.'\n';

    }

}

class B extends A {

    public function test() {

        A::foo();

        parent::foo();

        self::foo();

    }

    public function who() {

        echo __CLASS__.'\n';

    }

}

class C extends B {

    public  function who() {

        echo __CLASS__.'\n';

    }

}
$obj = new c();
$obj ->test();
?>