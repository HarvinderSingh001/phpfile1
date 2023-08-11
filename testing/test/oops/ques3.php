<?php
  class Student{
    private $name , $age;
    private static $totalStudents = 0;
    private static $sum = 0 ;
    function __construct($name , $age){
        $this->name = $name;
        $this->age = $age;
        static::$sum =  static::$sum + $age;
        static::$totalStudents++;
    }
    static function getAverageAge()
    {
        $sum = static::$sum;
        $total = static::$totalStudents;
        
        echo "average of all ages is ". $sum / $total;
    }
  }
  $harvinder = new Student('harvinder',21);
  $shubham = new Student('shubham',20);
  print_r($harvinder->getAverageAge());

?>