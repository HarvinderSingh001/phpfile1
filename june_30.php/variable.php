<?php
  class Company{
    public $name;
    private $employee;
  
  function __construct($name,$employee){
    $this->name=$name;
    $this->employee=$employee;
  }
  function get(){
    echo $this->name."<br>";
    echo $this->employee;
  } 
  
  function __destruct(){
    unset($this->name);
    echo "<br>";
    echo "$this->name".$this->employee;
    
  }
}
  $obj = new Company("Harvinde Singh","Shine Dezign");
  $obj->get();
  echo "<br>";
  
?>