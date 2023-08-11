<?php
class A
{
    protected $a='hello';
}
Class B extends A
{
    protected $b;
}
class C extends B{
    public function pr(){
        echo $this ->a;
    }
}
$c = new C();
$c -> pr();
?>