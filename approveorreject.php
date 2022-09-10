<?php
require 'databaseconnect.php';


if(isset($_POST['approve'])){
	
	include "approverequest.php";
	
}
else{
?>


<!DOCTYPE html>
<html>
<head>
 <style>
 .abcd{
	 display:flex;
	 background: rgba( 184, 136, 190, 0.25 );
     box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
     backdrop-filter: blur( 4px );
     -webkit-backdrop-filter: blur( 4px );
     border-radius: 10px;
     border: 1px solid rgba( 255, 255, 255, 0.18 );
     width:100%;
     height:50px;
	
 }
 .efgh{
	 
	 background: rgba( 104, 196, 176, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
width: 100px;	 
margin-left:50px;
margin-top:10px;
height:25px;
 }
 .efghii{
background: rgba( 57, 27, 82, 0.5 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 5.5px );
-webkit-backdrop-filter: blur( 5.5px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );	 
width: 200px;	 
margin-left:70px;
margin-top:10px;
height:25px;
text-align:center;
color:white;
 }
 
 .efghi{
	 
	 background: rgba( 104, 196, 176, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
width: 100px;	 
margin-left:70px;
margin-top:10px;
height:25px;
text-align:center;
color:white;
 }
 
 </style>
</head>
<body>
<h2>Student Event Request Details</h2>

<?php
$q="select * from `studentrequest`";
	$qr=@mysqli_query(@$mysqlc,$q);

		while($data=@mysqli_fetch_assoc($qr)){
		$sid=$data['sid'];
		$q2="select * from `studentprofile` where `id`='$sid'";
		
	$qrr=@mysqli_query(@$mysqlc,$q2);
	$data2=@mysqli_fetch_assoc($qrr)
			
?>
  <div class="abcd">
    <div class="efgh"><?php echo $data['sid']; ?></div>
	<div class="efghii" width="200px"><?php echo $data['name']; ?></div>
	<div class="efghi"><?php echo $data2['branch']; ?></div>
	
	<div class="efghi" ><?php echo $data['edes'] ?></div>
	<div class="efghi"><form action="approveorreject.php" method="post" ><input type="submit" value="approve" name="approve"></form></div>
	<div class="efghi"><form action="rejectrequest.php" method="post" ><input type="submit" value="reject" name="reject"></form></div>

	
  </div>
<br>  <br>
<?php
}
?>
<?php mysqli_close($mysqlc); ?>
</body>
</html>
<?php

}
?>