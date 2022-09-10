<html>
<head>
</head>
<body>
<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Full Name</td>
  </tr>
<?php

$db = mysqli_connect("localhost","root","","test");
$records = mysqli_query($db,"select * from display_images");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['images1']; ?></td>
    
  </tr>	
<?php
}
?>
</table>
</body>

</html>