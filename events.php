<?php
$file=fopen("events.txt","r");
$f=fread($file,filesize("events.txt"));
$arr=explode(" ",$f);
//print_r($arr);
?>
<html>
<head>
<style>
img{
	border:3px dashed purple;
	background-color:yellow;
	margin:40px;
	width:400px;
	height:400px;
}
</style>
</head>

<h1>Events</h1>
<p><img src="<?php echo $arr[0]?>"</p>
<p ><img src="<?php echo $arr[1]?>"</p>
<p ><img src="<?php echo $arr[2]?>"</p>

</html>