<?php
$dir='new1';
if($folder=@opendir($dir.'/')){
	echo 'dir opened';
	while($file=readdir($folder)){
		if($file!='.' and $file!='..'){
		echo '<img src="'.$dir.'/'.'pic.jpg">';
		
		}
	}
}
	

else{
	echo 'not exist';
}
?>