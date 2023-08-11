<?php
  abstract class A{
     protected $a;
    protected abstract function a();
  }
  class  B extends A{
     function a(){
        echo "this is class A abstract function ";
    }
  }
 class C extends B{
    
  }
 $obj=new c();
 $obj->a();
// interface B{
  
//   protected  function b();
// }
// interface A{
   
//     function a();
// }
// abstract class D implements A , B{
//     function a(){
//         echo "this is class A abstract function ";
//     }

// }
//  class C extends D{
//     function b(){
//         echo "this is class B abstraction function ";
//     }
// }
// $obj = new C();
// $obj->a();


?>