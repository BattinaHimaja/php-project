<?php
require 'databaseconnect.php';



		$q="select `link` from `upeveupload`";
		$qr=@mysqli_query($mysqlc,$q);
		//echo @mysqli_num_rows($qr);
		if($qr){
			if(@mysqli_num_rows($qr)>0){
				?><table><tr><?php
			while($row=@mysqli_fetch_assoc($qr)){
			$r=$row['link'];
			
			
					?>
					
					
					<td  style="height:50px;width:100px"><img src="<?php echo $r;?>" width="150" height="150"/></td>
					
				
				<?php
				}
				?>
				</tr>
				</table>
				<?php
				
				
			}
			else{
				echo "<h1>No events</h2>";
			}
		}
		else{
			echo "q failed";
		}
		
		
	

?>

    