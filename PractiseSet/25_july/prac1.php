
 
<!-- <?php

class constants {

    const MAX_VALUE = 10;
        public const MIN_VALUE =1;

}

// This will work
echo constants::MAX_VALUE;

// This will return syntax error 
echo constants::MIN_VALUE; 
?> -->


<!-- <?php
  define('name','harvinder');
  $name = constant('name');     //return constant  value  take variable as  argument 
  echo $name;


?> -->
<?php
class A{
    const a = 5;
}
// echo constants::a;
// print_r($_REQUEST['harvinder']);
print_r($_COOKIE['harvinder']);
echo A::a;
?>
