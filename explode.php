<?php
$f=fopen('formoutput.txt','r');
$o= fread($f,filesize('formoutput.txt'));
echo $o;
$f1=explode(',',$o);
print_r($f1);
echo $f1[0];
foreach($f1 as $s){
	echo $s;
}
?>