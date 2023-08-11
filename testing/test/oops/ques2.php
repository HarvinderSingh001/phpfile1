<?php
 interface Shape{
    function  calculateArea();
 }
 interface Color{
    function getColor();
 }
 class Rectangle implements Shape , Color{
     private $len ,  $wid , $color;
     function calculateArea(){
        return $this->len * $this->wid;
     }
     function getColor(){
        return $this->color;
     }
     function __construct($len , $wid , $col){
        $this->len = $len;
        $this->wid = $wid;
        $this->color = $col;
     }

    }
    $rec1 = new Rectangle(3,4,'red');
    print_r($rec1->calculateArea());
    echo "<br>";
    print_r($rec1->getColor());

 

?>