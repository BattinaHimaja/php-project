<?php
//registration success message
if(@$_GET['registered']==true){
	echo "<script>alert('you have registered successfully')</script>";
}
require 'databaseconnect.php';
include 'servarcf&session.php';
$logout="<a href='logout.php'>logout</a>";
if(loggedin()){
	//echo "welcome ".getuserfield('firstname')." ".getuserfield('lastname')."<br>";
	//echo $_SESSION['UN']."you are logged in"." ".$logout;
	include "home3.php";
	
	
}
else{
	include "studentlogin.php";
	
}



?>