<?
  session_start();
  $requiredUserLevel = array(10, 20, 30);
  $cfgProgDir = '../';
  include($cfgProgDir . "Secure_config.php");

  echo "OK";
  
?>