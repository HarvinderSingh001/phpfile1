<?php
    
        // function a(){
        //     echo "function without argument is called ";
        // }
        // function a($a){
        //     echo "function with one argument is called";
        // }
        // function a($a,$b){
        //     echo "function with two argument is called";
        // }
        // function a($a,$b,$c){
        //     echo "function with three arguments is  called";
        // }
        class A{
        function __call($method,$arg){
            if($method=="a"){
                $c = count($arg);
                if($c==0){
                    echo "fumction withouta  argument ";
                }
                if($c==1){
                    echo "fumction with one   argument ";
                }
                if($c==2){
                    echo "funciton with two argument is printed ";
                }
            }
        }
    }
    $obj = new A();
    $obj->a(3,5);
?>;
