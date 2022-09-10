<?php
if(isset($_POST['submit'])){
	$name=$_POST["fullname"];
	$roll=$_POST["roll"];
	$mail=$_POST["email"];
	$pass=$_POST["password"];
	$cpass=$_POST["cpassword"];
	if(!(empty($name)) && !(empty($roll)) && !(empty($mail)) && !(empty($pass)) && !(empty($cpass))){
		$f=fopen("signup.txt","a");
		fwrite($f,$name.",".$roll);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ceta login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <H1>Welcome to CETA...</H1>
    <div id="signup" class="form">
        <h2 class="stext">Sign Up</h2>
        <div class="scontent">
		<form action="login.php" method="POST">
            <input class="itext" type="text" name="fullname" placeholder="Full name">
            <br>
            <input class="ip" type="text" name="roll" placeholder="Roll number">
            <br>
            <input class="iemail" type="email" name="email" placeholder="Email">
            <br>
            <input class="ipass" type="password" name="password" placeholder="New Password">
            <br>
            <input class="icpass" type="password" name="cpassword" placeholder="Confirm Password">
            <br>
            <input type="submit" name="submit" class="btn" onclick="showLogin()">Sign Up</button>
			</form>
            <div class="pos">
                <a id="si" onclick="showLogin()" href="#already-member" class="am">
                Already A Member?
                </a>
            </div>
        </div>
    </div>
    <div id="login" class="form">
        <h2 class="stext">Login</h2>
        <div class="scontent">
           <input class="iemail" type="text" name="roll" placeholder="Roll number">
           <br>
           <input class="ipass" type="password" name="password" placeholder="Password">
           <br>
           <button type="button" class="btn2" onclick="window.open('student.html')">Login</button>
           <div class="pos2">
               <a id="si2" onclick="showSignup()" href="#not-a-member" class="am">
            Not A Member ?
            </a>
           </div>
        </div>
    </div>
    <script>
        function showLogin()
        {
            var y= document.getElementById("signup");
            var x= document.getElementById("login");
            if(y.style.display==="none")
            {
                y.style.display="block";
            }
            else{
                y.style.display="none";
                x.style.display="block";
            }
        }

        function showSignup()
        {
            var x = document.getElementById("login");
            var y = document.getElementById("signup");
            if(x.style.display==="block"){
                x.style.display="none";
                y.style.display="block";

            }
            else{
                x.style.display="block";
            }
        }
    </script>

</body>
</html>