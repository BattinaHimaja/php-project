<?php

require 'databaseconnect.php';
include 'servarcf&session.php';
$logout="<a href='logout.php'>logout</a>";
if(loggedin()){
	echo "welcome ".getuserfield('firstname')." ".getuserfield('lastname')."<br>";
	echo $_SESSION['UN']."you are logged in"." ".$logout;
	include "events.php";
	
	
}
else{
	include "loginsys.php";
	
}



?>