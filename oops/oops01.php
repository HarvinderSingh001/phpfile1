<?php
class Country{
     var $country_name="har";
     function setcn($name){
        echo $this->country_name;
         $country_name=$name;
         echo  "You entered country:"."$country_name";
         echo "<br>";
}
}
class District extends State{
    var $city;
    function setcc($name){
        echo $this->city="helllo";
        $city=$name;
        echo "Your entered District:".$city;
        echo "<br>";
}
}


Class State extends Country{
    // use District;
    var $state_name;
    function setsn($n){
        $state_name=$n;
        echo"Your state name is :".$state_name;
        echo "<br>";
}
    }

// $s= new  state();
$n= new District();
$n->setcn("INDIA");
$n->setcc("YAMUNA NAGAR");
$n->setsn("HARYANA");
// $n->setcn("INDIA");
?>
