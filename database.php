<?php
//connecting to database using php
$host="localhost";
$user="root";
$pass="";
@mysqli_connect($host,$user,$pass) or die("could not connect to server");
echo "connected to server <Br>";
@mysqli_select_db(@mysqli_connect($host,$user,$pass),"a1_database") or die("could not conect to db");
echo "connected to db";


?>