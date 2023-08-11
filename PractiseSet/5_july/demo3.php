<?php
ini_set('session.gc_maxlifetime',10); 
   session_start();
   print_r($_SESSION['form']);
//    session_destroy();
   print_r($_SESSION['user']);
   echo ini_get('session.gc_maxlifetime');
   
   echo ini_get('session.gc_maxlifetime');
?>