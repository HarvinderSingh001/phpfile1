<?php
class A
{
    var $a;
    function foo()
    {
        if (isset($this)) {

            // echo "$this is defined (";
            print_r($this);
            // echo get_class($this);

            // echo ")\n";
           $this->a;
        } else {

            echo "
            $this is not defined.\n";

        }

    }

}

 

class B

{

    function bar()

    {

        A::foo();

    }

}



$a = new A();

$a->foo();
$b = new A();
$c = new A();


?>