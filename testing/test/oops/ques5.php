<?php
  trait A{
    function commonMethod(){
        echo "this is trait  A ";
    }
  }
  trait B{
    function commonMethod(){
        echo "this is trait  B ";
    }
  }
  trait C{
    function commonMethod(){
        echo "this is trait  C ";
    }
  }
  Class MyClass {

    use A, B , C{
        C::commonMethod insteadof A,B;
    }
    
  }
  $obj = new MyClass();
  $obj -> commonMethod();

  // e  collision conflicts occurs when two or more traits are having same function name and that function is not overridden in class where traits are used 
?>