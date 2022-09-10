<?php
if(isset($_FILES['userfile']['name'])){
	$name=$_FILES['userfile']['name'];
	$temp=$_FILES['userfile']['tmp_name'];
	$location='uploads/';
	$new_name=$location.$name;
	$type=$_FILES['userfile']['type'];
	echo $type;
	$size=$_FILES['userfile']['size'];
	//2MB=2097152BYTES.
	$extension=strtolower(substr($name,strpos($name,".")+1));
	if(!empty($name)){
		if(($extension=="jpg" || $extension=="jpeg") && ($type=="image/jpeg")){
			if($size<=2097152){
		if(move_uploaded_file($temp,$new_name)){
			echo 'file uploaded';
		}
			}
			else{
				echo "file size 2MB";
			}
		}
		else{
			echo "only image files";
		}
	}
	else{
		echo 'please select a file';
	}
}

?>
<br><br>
<form action='restrictedupload.php' method="POST" enctype="multipart/form-data">
<input type="file" name="userfile"><br><br>
<input type="submit" value="upload">
</form>