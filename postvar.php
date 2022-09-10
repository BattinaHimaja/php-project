<?php
if(isset($_POST['submit'])){
$a=$_POST['year'];
$b=$_POST['day'];
$c=$_POST['month'];
echo htmlentities("<br>");
if(!empty($a) && !empty($b) && !empty($c)){
	echo $a;
}
else{
	echo "not ok";
	
}
}
?>
<form action="postvar.php" method="POST">

Day:<input type="text" name="day">
<br>
month:<input type="text" name="month">
<br>
year:<input type="text" name="year">
<br>
<input type="submit" name="submit">
</form>
