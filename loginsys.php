<?php
if(isset($_POST['submit'])){
	
	$un=$_POST['un'];
	$pass=$_POST['pass'];
	
	if(!(empty($un)) && !(empty($pass))){
		$passmd5=md5($pass);
		$q="select `id` from `users1` where `username`='$un' and `password`='$passmd5'";
		$qr=@mysqli_query($mysqlc,$q);
		//echo @mysqli_num_rows($qr);
		if($qr){
			if(@mysqli_num_rows($qr)==1){
				$_row=mysqli_fetch_row($qr);
				$id=$_row[0];
				$_SESSION['userid']=$id;
				$_SESSION['UN']=$un;
				header("Location: index2.php");
				
				
			}
			else{
				echo "invalid credentials";
			}
		}
		else{
			echo "q failed";
		}
		
		
	}
	else{
		echo "enter un and pass";
	}
	
}

?>
<form action="<?php echo $cf ?>" method="POST">
username:<input type="text" name="un"></input><br>
password:<input type="text" name="pass"></input><br>
<input type="submit" name="submit"></input><br>
</form>