<?php
//   abstract class User{
//     protected $username ;
    
//     function getter(){
//         //echo "your username is ". 
//         return $this->username;
//     }
//     abstract function stateYourRole();
//     function setter($name){
//         $this->username = $name;
        
//     }
//   }
//   class Admin extends User{
//     function stateYourRole(){
//         return "admin";
//     }
//     // function __call($methods,$arg){
//     //   Admin:: stateYourRole();
//     // }
  
//   }
//   class Viewer extends User{
//     function stateYourRole(){
//         return "Admin";
//     }
 
//   }
//   $obj = new Admin();
  
//   $obj->setter("balthazar");
//   echo $obj->stateYourRole();

$abc = ["a"=>'a','a'=>"a",'dog'=>'cat',3=>4];
Print_r(array_count_values($abc));

?>