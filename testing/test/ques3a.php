<?php 
  session_start();
  $_SESSION['name']='Harvinder Singh';
  $_SESSION['age']='21';
  if($_SESSION['name']){
    echo "session value  setted";
  }
?>


quest3b.php
<?php
  session_start();
  echo  $_SESSION['name'];//accessing using key
  echo  $_SESSION['age'];
  session_destroy();

?>