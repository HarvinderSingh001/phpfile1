<?php
     class A{
    //    function __CALL($method , $arg){
    //     if($method=="hello"){
    //         echo "hello";
    //     }
    //    }

    function __construct(array $arg){
        $key = array_keys($arg);
       switch($key){
        case 0 :
            echo "constructor with  one argument ";
            break;
        case 1 :
            echo "constructor with two argument";
            break;
        case 2: 
            echo "constructor with  three arguments";
            break;
        default:
            echo "constructor having  more then three arguments is called";
       }
    }
     }
     $obj = new A(4 ,5);
     


?>