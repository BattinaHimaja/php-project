<?php
if(!isset($_SESSION)) { 
  session_start(); 
} 
unset($_SESSION['userid']);
include "stusignin&up.php";
?>