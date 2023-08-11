<?php
    trait A1{
    private $a;
    function  seta($a){
      $this->a = $a;
    }
    public  function geta(){
    echo $this->a;
    echo  "<br>";
   }
}
   
    trait A2{
    private $b;
    public function  seta($b){
        $this->b=$b;
    }
    public function geta(){
        echo $this->b;
        echo "<br>"; 
    }
   }
   class C{
      use A1,A2;
   } 
   $obj  = new C();

?>