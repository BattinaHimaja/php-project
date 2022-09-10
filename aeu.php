<?php
require 'databaseconnect.php';
include 'servarcf&session.php';
if(isset($_POST['add'])){
	$name=$_FILES['userfile']['name'];
	$temp=$_FILES['userfile']['tmp_name'];
	$location='eventsuploads/';
	$new_name=$location.$name;
	move_uploaded_file($temp,$new_name);
	$ename=$_POST['ename'];
	$etype=$_POST['etype'];
	$edate=$_POST['edate'];
	$etime=$_POST['etime'];
	$evenue=$_POST['evenue'];
    $q="select `email` from `studentsdata`";
	$qu=mysqli_query($mysqlc,$q);
    $sub="CETA EVENT REMAINDER";
    $body="EVENT NAME ".$ename."<br> EVENT TYPE ".$etype." <br>EVENT DATE ".$edate." <br>EVENT TIME ".$etime." <br>EVENT VENUE ".$evenue."<br> Register for it";
	while($res=mysqli_fetch_array($qu)){
    $headers="From: battinahimaja276@gmail.com";
	$to=$res["email"];
     if(mail($to,$sub,$body,$headers)){
		 echo "mail sent";
	 }
	 
	}


	if((!empty($ename)) && (!empty($etype)) && (!empty($edate)) && (!empty($etime)) && (!empty($evenue)) && !(empty($new_name))) {


	
		
				$qi="INSERT INTO `cetaevent`(`id`, `link`, `name`, `type`, `date`, `venue`, `time`) VALUES (NULL,'$new_name','$ename','$etype','$edate','$evenue','$etime')";
				$qrr=mysqli_query($mysqlc,$qi);
				
				
				if($qrr){
					echo "<script>alert('event uploaded successfully')</script>";
					
				}
				
				else{
					echo "event insert q failed";
				}
				
				
			}
			
			
		else{
			echo "<script>alert('enter all fields')</script>";
		}
	

}

	
		/*if(move_uploaded_file($temp,$new_name)){
			echo 'file uploaded';
			$f=fopen("events.txt","a");
			fwrite(fopen("events.txt","a"),$new_name." ");
			
		}*/
	

if(isset($_FILES['userfile1']['name'])){
	$name=$_FILES['userfile1']['name'];
	$temp=$_FILES['userfile1']['tmp_name'];
	$location='eventsuploads/';
	$new_name=$location.$name;
	if(!empty($name)){
		
				$qi="insert into `upcomingevents`(`link`) values ('$new_name')";
				$qrr=mysqli_query($mysqlc,$qi);
				
				
				if($qrr){
					echo "<script>alert('event uploaded successfully')</script>";
					
				}
				
				else{
					echo "event insert q failed";
				}
				
				
			}
			
			
		else{
			echo "<script>alert('select a file')</script>";
		}
	
}	
	
	
		/*if(move_uploaded_file($temp,$new_name)){
			echo 'file uploaded';
			$f=fopen("events.txt","a");
			fwrite(fopen("events.txt","a"),$new_name." ");
			
		}*/
	

if(isset($_POST['delete2'])){
	
	$eid=$_POST['event'];
	
	
	if(!(empty($eid))){
	
		$q="delete from `events` where `linkno`='$eid'";
		$qr=@mysqli_query($mysqlc,$q);
		//echo @mysqli_num_rows($qr);
		if($qr){
			
				echo "<script>alert('event deleted ')</script>";
			}
			else{
				echo "<script>alert('event not deleted ')</script>";
			}
		
		
		
	}
	else{
			echo "enter event";
		}
}	

?>


































<html>
<style>
 @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

section {
  position: relative;
  min-height: 100vh;
  background-color: #f8dd30;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

section .container {
  position: relative;
  width: 800px;
  height: 700px;
  background: #fff;
  box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

section .container .user {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
}

section .container .user .imgBx {
  position: relative;
  width: 50%;
  height: 100%;
  background: #ff0;
  transition: 0.5s;
}

section .container .user .imgBx img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: contain;
}

section .container .user .formBx {
  position: relative;
  width: 50%;
  height: 100%;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  transition: 0.5s;
}

section .container .user .formBx form h2 {
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  width: 100%;
  margin-bottom: 10px;
  color: #555;
}

section .container .user .formBx form input {
  position: relative;
  width: 100%;
  padding: 10px;
  background: #f5f5f5;
  color: #333;
  border: none;
  outline: none;
  box-shadow: none;
  margin: 8px 0;
  font-size: 14px;
  letter-spacing: 1px;
  font-weight: 300;
}

section .container .user .formBx form input[type='submit'] {
  max-width: 100px;
  background: #677eff;
  color: #fff;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.5s;
}

section .container .user .formBx form .signup {
  position: relative;
  margin-top: 20px;
  font-size: 12px;
  letter-spacing: 1px;
  color: #555;
  text-transform: uppercase;
  font-weight: 300;
}

section .container .user .formBx form .signup a {
  font-weight: 600;
  text-decoration: none;
  color: #677eff;
}

section .container .signupBx {
  pointer-events: none;
}

section .container.active .signupBx {
  pointer-events: initial;
}

section .container .signupBx .formBx {
  left: 100%;
}

section .container.active .signupBx .formBx {
  left: 0;
}

section .container .signupBx .imgBx {
  left: -100%;
}

section .container.active .signupBx .imgBx {
  left: 0%;
}

section .container .signinBx .formBx {
  left: 0%;
}

section .container.active .signinBx .formBx {
  left: 100%;
}

section .container .signinBx .imgBx {
  left: 0%;
}

section .container.active .signinBx .imgBx {
  left: -100%;
}

@media (max-width: 991px) {
  section .container {
    max-width: 400px;
  }

  section .container .imgBx {
    display: none;
  }

  section .container .user .formBx {
    width: 100%;
  }
}

</style>


<body>
  <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="https://www.svec.education/wp-content/uploads/2020/08/cse.jpg" width=100px ></div>
        <div class="formBx">
          <form action="aeu.php"  method="post" enctype="multipart/form-data">
            <h2>Add Current Event</h2>
            <input type="file" name="userfile" placeholder="event file" /><br>
			Event name<input type="text" name="ename"  /><br>
			Event type<pre> </pre>
			<select name="etype">
			<option>select</option>
			<option>single</option>
			<option>group</option>
			</select>
            <br><br>
			Event venue<input type="text" name="evenue"  /><br>
			Event date<input type="date" name="edate"  /><br>
			Event time<input type="time" name="etime"  /><br>
            <input type="submit" name="add"  value="add"/>
			<br><br><br>
			<a href="adminpage.html" style="float:right;font-size:20px;color:blue;font-weight:bold;" >Go to Home page</a>
            
            
          </form>
        </div>
      </div>
      
    </div>
  </section>



	
	
</body>
</html>
