<!-- 
    // trait villa{
    //    var $name ;
    //    var $distance;
    //     function hello(){
    //         echo "RAM Ram ji";
    //     }
    // }
    // trait city{
    //     var $name;
    //     var $distance;
    //     function hello(){
    //          echo "helooo";
    //     }
    // }
    // class state{
    //     use villa;
    //     use city;
    // }
    // $obj=new state;
    // $obj->hello();
// 


<?php
    class hi{}
    class by extends hi{}
    interface villa{
       
        function hello(hi $name):hi;
    }
    interface city{
        
        function hello(by $name);
    }
    class state implements villa , city{
        function hello(hi $name):hi{
            echo"namaste india";
        }
    }
    $a = new hi;
    $obj=new state;
    $obj->hello($a);
?>