<html>
<head>
<style>
table, th, td
{
            border: 1px solid black;
}

</style>
</head>
<body>
<table border="2">
 <tr>
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
    <td  style="height:50px;width:100px"><img src="<?php echo $data['images1']; ?>" width="250" height="150"/></td>
<?php
}
?>
</tr>
</table>

<!--   
<table>
<tr>
<td  style="height:50px;width:100px"><img src="https://cdn.xxl.thumbs.canstockphoto.com/cartoon-penguin-vector-illustration-of-a-cute-cartoon-penguin-grouped-and-layered-for-easy-editing-eps-vector_csp8836804.jpg" width="250" height="150"/></td>
</tr>

-->
</body>
</html>