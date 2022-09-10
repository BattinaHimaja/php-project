<?php
$ip=$_SERVER['REMOTE_ADDR'];
$ip_b=array('127.0.0.19','10.0.10.10');
foreach($ip_b as $i){
	if($i==$ip){
		die("blocked");
	}
}
echo "hi";
?>