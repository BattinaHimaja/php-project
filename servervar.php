<?php
$name=$_SERVER['SCRIPT_NAME'];
if(isset($_POST['one'])){
$name=$_SERVER['SCRIPT_NAME'];
echo $name;
}
?>
<form action="<?php echo $name ?>" method='POST'>
<input name="one" value="submit" type="submit"></input>
</form>