<?php
  class A{
    private $name ;
    private $id;
    private $post;
    protected function __construct($name , $id , $post){
        $this->name = $name ;
        $this->id = $id;
        $this->post= $post;
    }
    function made($name , $id , $post){
        self::construct($name , $id , $post);
    }
  }
  class B{
    static function   objectCreation($name , $id , $post){
        return new A($name , $id , $post);
    }
  }
  $obj =  B::objectCreation('harvinder',12, 'senior');
  $obj ->made('harvinder' , '343','casino');
?>