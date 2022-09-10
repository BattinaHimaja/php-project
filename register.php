<?php
require "servarcf&session.php";
require "databaseconnect.php";
if(loggedin()){
	echo "you have already logged in";
}
else{
	if(isset($_POST['submit'])){
		$un=$_POST['un'];
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];
		$fn=$_POST['fn'];
		$ln=$_POST['ln'];
		
		if(!(empty($un)) && !(empty($pass)) && !(empty($cpass)) && !(empty($fn)) && !(empty($ln))){
			$passmd5=md5($pass);
			//unique usernames
			if($pass!=$cpass){
				echo "pass not match";
			}
			else{
			$q="select `username` from `users1` where `username`='$un'";
			$qr=mysqli_query($mysqlc,$q);
			if($qr){
			$nr=mysqli_num_rows($qr);
			if($nr==1){
				echo "username already exists";
			}
			else if($nr==0){
				$qi="insert into `users1`(`id`,`username`,`password`,`firstname`,`lastname`) values (NULL,'$un','$passmd5','$fn','$ln')";
				$qrr=mysqli_query($mysqlc,$qi);
				if($qrr){
					ob_start();
                    header("Location: registerafterlogin.php");
					
				}
				else{
					echo "insert q failed";
				}
				
				
			}
			
			}
			else{
				echo "q failed";
			}
			}
		
		}
		else{
			echo "enter all fields";
		}
	}
	
	
	
	
	
	
	
	
	
	?>
	<h1>register</h1>
	<form action="<?php echo $cf ?>" method="POST">
username:<input type="text" name="un"></input><br>
password:<input type="password" name="pass"></input><br>
confirm password:<input type="password" name="cpass"></input><br>
firstname:<input type="text" name="fn"></input><br>
lastname:<input type="text" name="ln"></input><br>
<input type="submit" name="submit"></input><br>
</form>
	<?php
}
?>