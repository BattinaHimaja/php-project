<?php
$to="sandyareddy2094@gmail.com";
$sub="hi";
$body="body";
$headers="From: battinahimaja276@gmail.com";
if(mail($to,$sub,$body,$headers)){
echo "email sent";

}
else{
echo "email sending failed";
}
?>