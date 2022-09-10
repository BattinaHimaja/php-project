<?php
require 'databaseconnect.php';
?>
<form action="dbselect1.php" method="GET">
<select name="fv">
<option>select</option>
<option value="f">fruits</option>
<option value="v">vegetables</option>
</select>
<input type="submit" name="submit"></input>
</form>
<?php
if(isset($_GET['fv'])){
	$name=$_GET['fv'];
	$q="select `name` from `foods` where `type`='$name'";
	$qr=@mysqli_query(@$mysqlc,$q);
	if($qr){
		while($row=@mysqli_fetch_assoc($qr)){
			$name=$row['name'];
			echo $name."<br>";
		
		}
		}
	else{
		echo "q failed";
	}
	
}
?>