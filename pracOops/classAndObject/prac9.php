<?php
  class A{
    private $a , $b ,$c;
    function __construct($args){
        $parameter = count($args);
            if($parameter==0){
                $this->a = 1; 
                $this->b = 2;
                $this->c = 3;
                echo $this->a ; 
                echo "<br>";
                echo $this->b ; 
                echo "<br>";
                echo $this->c ; 
                echo "<br>";

            }
            if($parameter==1){
                $this->a = $args[0];
                $this->b = $args[0]+ 1;
                $this->c = $args[0]+ 2  ;
                echo $this->a ; 
                echo "<br>";
                echo $this->b ; 
                echo "<br>";
                echo $this->c ; 
                echo "<br>";
            }
            if($parameter==2){
                $this->a = $args[0];
                $this->b = $args[1];
                $this->c = $args[1] + 1;
                echo $this->a ; 
                echo "<br>";
                echo $this->b ; 
                echo "<br>";
                echo $this->c ; 
                echo "<br>";
            }
            if($parameter==3){
                $this->a = $args[0];
                $this->b = $args[1];
                $this->c = $args[2];
                echo $this->a ; 
                echo "<br>";
                echo $this->b ; 
                echo "<br>";
                echo $this->c ; 
                echo "<br>";
           }
           }
    
  }
 $obj = new A([1]);
 $obj = new A([1,3])
 $obj = new A([1,3,6]);
?>