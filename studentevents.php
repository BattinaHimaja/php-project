<?php
require 'databaseconnect.php';
echo "<style>
img{
	width:400px;
	height:400px;
}
</style>";


		$q="select `link` from `events`";
		$qr=@mysqli_query($mysqlc,$q);
		//echo @mysqli_num_rows($qr);
		if($qr){
			if(@mysqli_num_rows($qr)>0){
			while($row=@mysqli_fetch_assoc($qr)){
			$r=$row['link'];
			
			
					echo "<p><img src=".$r."></p>"."<br><br>";
				}
				
				
			}
			else{
				echo "<h1>No events this week</h2>";
			}
		}
		else{
			echo "q failed";
		}
		
		
	

?>
