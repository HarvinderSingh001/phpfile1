<?php
   class A{
     function __CALL($method , $args){
         $parameters = count($args);
         if($method=='sum'){
            if(!$args){
                echo "Atleast two numbers are required";
                echo "<br>";
            }
            else{
                if($parameters==1){
                    echo "minimum two numbers required for sum ";
                    echo "<br>";
                }
                if($parameters==2){
                    echo $args[0]+$args[1];
                    echo "<br>";
                }
                if($parameters==3){
                    echo $args[0]+$args[1]+$args[2];
                    echo "<br>";
                }
            }
           
            
         }
     }
   }
   $obj = new A();
   $obj ->sum();
   $obj ->sum(1);
   $obj ->sum(1,2);
   $obj ->sum(1,2,3);

?>