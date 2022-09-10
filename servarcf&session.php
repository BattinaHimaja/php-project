<?php
ob_start();
if(!isset($_SESSION)) { 
  session_start(); 
} 

$cf=$_SERVER['SCRIPT_NAME'];
function adminloggedin(){
	if(isset($_SESSION['aid']) && !(empty($_SESSION['aid']))){
		return true;
	}
	else{
		return false;
	}
}
function loggedin(){
	if(isset($_SESSION['userid']) && !(empty($_SESSION['userid']))){
		return true;
	}
	else{
		return false;
	}
}
function getuserfield($field){
	global $mysqlc;
	$id=$_SESSION['userid'];
	$q="select `$field` from `users1` where `id`='$id'";
	if($qr=mysqli_query($mysqlc,$q)){
		$nr=mysqli_num_rows($qr);
		if($nr==1){
			$row=mysqli_fetch_row($qr);
			return $row[0];
		}
	}
}
?>