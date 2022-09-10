<?php
if(isset($_POST['submit'])){
	$pass=$_POST['password'];
	if(!(empty($pass))){
		$encryptpass=md5($pass);
		$fname='passworden.txt';
		$fsize=filesize($fname);
		$f=fopen($fname,"r");
		$key=fread($f,$fsize);
		if($encryptpass==$key){
			echo "ok";
		}
		else{
			echo "wrong";
		}
	}
	else{
		echo "enter password";
	}
}


?>
<form action="encrypt.php" method="POST">
<input type="password" name="password"></input>
<input type="submit" name="submit"></input>
</form>