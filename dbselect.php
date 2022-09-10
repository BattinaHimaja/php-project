<?php
require 'databaseconnect.php';
$query='SELECT `firstname` , `lastname` from `users` WHERE ID=11';
	if($queryop=@mysqli_query($mysqlc,$query)){
		//echo "q success";
		//no.of.rows==0 or null
		if(mysqli_num_rows($queryop)!=NULL){
		while($row=mysqli_fetch_assoc($queryop)){
			$fname=$row['firstname'];
			$lname=$row['lastname'];
			echo $fname." ".$lname."<br>";
			
		}
		}
		else{
			echo "no users found";
		}
	}
	else{
		echo "q failed";
	}

?>