<?php
//registration success message
if(@$_GET['registered']==true){
	echo "<script>alert('you have registered successfully')</script>";
}
require 'databaseconnect.php';
include 'servarcf&session.php';
//$logout="<a href='adminlogout.php'>logout</a>";
if(adminloggedin()){
	//echo "welcome ".getuserfield('firstname')." ".getuserfield('lastname')."<br>";
	//echo $_SESSION['UN']."you are logged in"." ".$logout;
	include "adminpage.html";
	
	
}
else{
	include "adminlogin.php";
	
}



?>