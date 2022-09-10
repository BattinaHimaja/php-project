<?php
require 'databaseconnect.php';
include 'servarcf&session.php';
if(!isset($_SESSION)){
	session_start();
}
if(isset($_POST['add'])){
	
	
	$ename=$_POST['ename'];
	$etype=$_POST['etype'];
	$pname=$_POST['uname'];
	$uid=$_SESSION['userid'];
	
	
	if((!empty($ename)) && (!empty($etype)) &&  !(empty($pname))) {


	
		
				$qi="INSERT INTO `seventreg` (`ename`,`username`,`uid`) VALUES ('$ename','$pname','$uid')";
				$qrr=mysqli_query($mysqlc,$qi);
				
				
				if($qrr){
					echo "<script>alert('you registered successfully');</script>";
					
				}
				
				else{
					echo "event insert q failed";
				}
				
				
			}
			
			
		else{
			echo "<script>alert('enter all fields');</script>";
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
          <form action="eventreg.php"  method="post" >
            <h2>Event registration</h2>
            
			Event name
			<input type="text" name="ename"  /><br>
			Event type<pre> </pre>
			<select name="etype">
			<option>select</option>
			<option>single</option>
			<option>group</option>
			</select>
            <br><br>
			Group name or username:
			<input type="text" name="uname" /><br>
            <input type="submit" name="add"  value="Register"/>
			<br><br><br>
			<a href="home3.php" style="float:right;font-size:20px;color:blue;font-weight:bold;" >Go to Home page</a>
            
            
          </form>
        </div>
      </div>
      
    </div>
  </section>



	
	
</body>
</html>
