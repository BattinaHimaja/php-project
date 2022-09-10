<?php
//connecting to database using php
$host="localhost";
$user="root";
$pass="";
//$db="a_database";
$db="ceta";
if($mysqlc=@mysqli_connect($host,$user,$pass)){
//echo "connected to server <Br>";
if(@mysqli_select_db($mysqlc,$db)){
	//echo "connected to db"."<br>";
	
}
else{
	echo "db connection failed"."<br>";
}
}
else{
	echo "server connection failed"."<br>";
}
 


?>