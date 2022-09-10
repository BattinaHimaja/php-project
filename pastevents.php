<?php
require 'databaseconnect.php';



		$q="select * from `pastevents`";
		$qr=@mysqli_query($mysqlc,$q);
		//echo @mysqli_num_rows($qr);
		if($qr){
			if(@mysqli_num_rows($qr)>0){
				?><table><tr><?php
			while($row=@mysqli_fetch_assoc($qr)){
			$r=$row['link'];
			$ename=$row['name'];
			$edate=$row['date'];
			$etime=$row['time'];
			$evenue=$row['venue'];
			$etype=$row['type'];
			
			
			
					?>
					
					
				<td  style="height:40px;width:100px;padding:bottom:30px"><img src="<?php echo $r;?>" width="150" height="100" style="float:right;padding:30px"/ >
				<p style="border:2px solid blue;padding:10px">
				<?php echo "event name : ".$ename."<br>"; echo "event date : ".$edate."<br>"; echo "event type : ".$etype."<br>"; echo "event time : ".$etime."<br>"; echo "event venue : ".$evenue; ?></p></td>
				
				
				<?php
				}
				?>
				</tr>
				</table>
				<?php
				
				
			}
			else{
				echo "<h1>No past events</h2>";
			}
		}
		else{
			echo "q failed";
		}
		
		
	

?>

    
