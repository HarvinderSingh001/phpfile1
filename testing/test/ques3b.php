<?php
  session_start();
  echo  $_SESSION['name'];//accessing using key
  echo  $_SESSION['age'];
  session_destroy();

?>