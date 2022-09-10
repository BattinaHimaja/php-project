<?php
$file='new1/pic.jpg';
if(@unlink($file)){
echo 'file deleted';
}
else{
	echo 'file cannot be deleted';
}
//renaming file
if(@rename('1.php','delete and rename file.php')){
	echo 'file renamed';
}
else{
	echo 'failed';
}
?>