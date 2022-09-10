<?php
if(isset($_GET['submit'])){
$a=$_GET['year'];
$b=$_GET['day'];
$c=$_GET['month'];
if(!empty($a) && !empty($b) && !empty($c)){
	echo "ok";
}
else{
	echo "not ok";
	
}
}
?>
<form action="getvar.php" method="GET">

Day:<input type="text" name="day">
<br>
month:<input type="text" name="month">
<br>
year:<input type="text" name="year">
<br>
<input type="submit" name="submit">


</form>