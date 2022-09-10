<?php
if(!isset($_SESSION)) { 
  session_start(); 
} 
unset($_SESSION['aid']);
include "adminsignin&up.php";
?>