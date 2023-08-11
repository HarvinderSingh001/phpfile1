<?php
//   class A{
//     var $a;
//     function __construct($a){
//         $this->a = $a;
//     }
//     function __destruct(){
      
//         echo "destructor is called";
//     }
//   }
//   $obj1 = new A(4);
//   $obj = new A(2);
  
//   var_dump($obj);

class A{
    var $a;
    protected function __construct(){
        echo "constructor  is  call";
    }
    function call(){
        self::__construct();
    }
}
// class B extends A{
//    function __construct(){
//     echo "derived class constructor is called";
//    }
// }
$obj = new A();
$obj ->call();
