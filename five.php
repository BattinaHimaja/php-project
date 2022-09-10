<?php
//post
if(isset($_POST['submit'])){
	$v=rand(1,10);
	echo $v;
}
//server variables
print_r($_POST); //array
print_r($_SERVER); //array
echo $_SERVER['SCRIPT_NAME'];
?>
<form action="new1/four.php" method="POST">
<input type="submit" name="submit" value="value"></input>
</form>