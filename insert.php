<?php
include("config.php");

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$author=$_POST['author'];
$description=$_POST['description'];
$price=$_POST['price'];
$url=$_POST['url'];
$res=mysqli_query($mysqli,"INSERT into `bookinfo` VALUES('$name','$author','$description','$price','$url')");
if($res)
{
echo "sucess";
}
else{
echo "failed";
}
}
?>

<html>
<head>
<title>
</title>
</head>
<body>
<form action="insert.php" method="POST">
BOOK NAME<input type="text" name="name"><br>
BOOK AUTHOR<input type="text" name="author"><br>
BOOK DESCRIPTION<input type="text" name="description"><br>
BOOK PRICE<input type="text" name="price"><br>
BOOK IMG URL<input type="url" name="url"><br>
<input type="submit" name="submit">
</form>

</body>
</html>
