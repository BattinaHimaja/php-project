<?php
if(isset($_POST['send'])){
	    $from=$_POST['from'];
		$to=$_POST['to'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
		$header="From:".$from;
	if(!(empty($from)) && !(empty($to)) && !(empty($subject)) && !(empty($message))){
		echo "<script>alert('hi');</script>";
		
		if(@mail($to,$subject,$message,$header)){
			echo "<script>alert('mail sent');</script>";
		}
		else{
			echo "<script>alert('mail not sent');</script>";
		}
	}
	else{
		echo "empty";
	}
}
?>
<style>
body{
	color:white;
}
</style>

<form action="mail.php" method="POST" style="border:2px dashed blue;padding:100px;margin:100px;background-color:green">
From:<br>
<input type="text" name="from" ></input><br><br>
To:<br><input type="text" name="to" ></input><br><br>
Subject:<br>
<input type="text" name="subject" ></input><br><br>
Message:<br>
<input type="text" name="message" ></input><br><br>
<input type="submit" name="send" ></input><br><br>
</form>