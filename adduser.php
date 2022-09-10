<?php
require 'databaseconnect.php';
include 'servarcf&session.php';
if(isset($_POST['b2'])){
		$un=$_POST['un'];
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];
		$fn=$_POST['fn'];
		$ln=$_POST['ln'];
		
		if(!(empty($un)) && !(empty($pass)) && !(empty($cpass)) && !(empty($fn)) && !(empty($ln))){
			$passmd5=md5($pass);
			//unique usernames
			if($pass!=$cpass){
				echo "<script>alert('pass not match')</script>";
			}
			else{
			$q="select `username` from `studentsdata` where `username`='$un'";
			$qr=mysqli_query($mysqlc,$q);
			if($qr){
			$nr=mysqli_num_rows($qr);
			if($nr==1){
				echo "<script>alert('username already exists')</script>";
			}
			else if($nr==0){
				$qi="insert into `studentsdata`(`id`,`username`,`password`,`firstname`,`lastname`) values (NULL,'$un','$passmd5','$fn','$ln')";
				$qrr=mysqli_query($mysqlc,$qi);
				
				
				if($qrr){
					ob_start();
					echo "<script>alert('user added successfully');</script>";
                    
					
				}
				
				else{
					echo "insert q failed";
				}
				
				
			}
			
			}
			else{
				echo "q failed";
			}
			}
		
		}
		else{
			echo "<script>alert('enter all fields')</script>";
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
  height: 500px;
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
          <form action="adduser.php"  method="post" enctype="multipart/form-data">
            <h2>Add user</h2>
			<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="un" required>
				
				
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="pass" required>
				
					<label for="pass" class="label">Confirm Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="cpass" required>
				
					<label for="user" class="label">firstname</label>
					<input id="user" type="text" class="input" name="fn" required>
				
					<label for="user" class="label">lastname</label>
					<input id="user" type="text" class="input" name="ln" required>
				
            <input type="submit" name="b2" value="add" />
            
			<a href="adminpage.html" style="float:right;font-size:20px;color:blue;font-weight:bold;" >Go to Home page</a>
            
          </form>
        </div>
      </div>
      
    </div>
  </section>



	
	
</body>
</html>