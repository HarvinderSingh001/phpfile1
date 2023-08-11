<?PHP
  session_start();
  print_r($_POST);
  $_SESSION['form']=$_POST;
  
?>