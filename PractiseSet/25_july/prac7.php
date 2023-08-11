<?php

setcookie('name','harvinder',time() + 120 , '/' );
if(isset($_COOKIE['name'])){
    echo "cookies are set by hemchand ";
}
?>