<?php
require 'databaseconnect.php';
if(!isset($_SESSION)) { 
  session_start(); 
} 
$id=$_SESSION['userid'];
$qi="select * from `studentprofile` where `id`='$id'";
$qrr=mysqli_query($mysqlc,$qi);
$qn=mysqli_num_rows($qrr);
if($qn==0){
	$b="";
	$s="";
	$m=$_SESSION['email'];
	
}else{
	$qr=mysqli_fetch_assoc($qrr);
	$b=$qr['branch'];
	$s=$qr['year(1-4)'];
	$_SESSION['branch']=$b;
	$_SESSION['year']=$s;
	$m=$qr['mail'];
}
if(isset($_FILES['userfile']['name'])){
	$name=$_FILES['userfile']['name'];
	$temp=$_FILES['userfile']['tmp_name'];
	$location='profilephotos/';
	$new_name=$location.$name;
	if(!empty($name)){
		
		move_uploaded_file($temp,$new_name);
			
		$qi="select `link` from profilephoto where `id`='$id'";
		$qrr=mysqli_query($mysqlc,$qi);
		$qn=mysqli_num_rows($qrr);
		if($qn==0){
			
				
	
		
				$qi="insert into `profilephoto` (`id`,`link`) values ('$id','$new_name')";
				$qrr=mysqli_query($mysqlc,$qi);
				
				
				if($qrr){
					
					echo "<script>alert('profile photo uploaded successfully')</script>";
					
				}
				
				else{
					echo "event insert q failed";
				}
				
				
			}
			else{
			
				
	
		
				$qi="update `profilephoto` set `id`='$id',`link`='$new_name' where `id`='$id'";
				$qrr=mysqli_query($mysqlc,$qi);
				
				
				if($qrr){
					
					echo "<script>alert('profile photo uploaded successfully')</script>";
					
				}
				
				else{
					echo "event insert q failed";
				}
				
				
			}
			
	}
		else{
			echo "<script>alert('select a file')</script>";
		}
	
}
$qi="select `link` from `profilephoto` where `id`='$id'";
$qrr=mysqli_query($mysqlc,$qi);
if(mysqli_num_rows($qrr)==0){
	$link="https://tse4.mm.bing.net/th?id=OIP._VoTfUzENldEmDbFEcQi4QHaHa&pid=Api&P=0&w=300&h=30";
	
}
else{
	$r=mysqli_fetch_assoc($qrr);
	$link=$r['link'];
}

	
	
		/*if(move_uploaded_file($temp,$new_name)){
			echo 'file uploaded';
			$f=fopen("events.txt","a");
			fwrite(fopen("events.txt","a"),$new_name." ");
			
		}*/
	

?>

<html>
<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="StyleSheet.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
 .items {
     width: 90%;
     margin: 0px auto;
     margin-top: 10px
 }
 .slick-slide {
     margin: 15px
 }
 .slick-slide img {
     width: 75%;
	 height:250px;
     border: 0px solid 
	 border-radius:10px;
 }
/*========================*/
.logo{
display:flex;
}
.logoo{
margin-left:45px;
}

.navbar{

display:flex;
margin-top:10px;
background: rgba( 147, 91, 167, 0.6 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
height:50px;
width:100%;
}
.navbar .options ul{
display:flex;
align-items:center;
justify-content:space-between ;
gap:60px;
}

.navbar .options ul li{
list-style:none;

}
.navbar .options ul li a{
text-decoration:none;
color:#fff;
}
.options{
  margin-top:5px;
  margin-bottom:10px;
 
  height:40px;
  width:  ; 
}
/*========================*/
.profilepage{
background: rgba( 255, 255, 255, 0.6 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
height:500px;
width:100%;
}
@import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");
.header {
width:100%;
  min-height: 60vh;
  background: #009FFF;
background: linear-gradient(to right, #ec2F4B, #009FFF);
  color: white;

  display: flex;
  align-items: center;
  justify-content: center;
}

.details {
  text-align: center;
}

.profile-pic {
  height: 6rem;
  width: 6rem;
  object-fit: center;
  border-radius: 50%;
  border: 2px solid #fff;
}

.location p {
  display: inline-block;
}

.location svg {
  vertical-align: middle;
}

.stats {
  display: flex;
}

.stats .col-4 {
  width: 10rem;
  text-align: center;
}

.heading {
  font-weight: 400;
  font-size: 1.3rem;
  margin: 1rem 0;
}
/*========================*/

.dashboardd{
	display:flex;
margin-left:10px;
margin-right:10px;
display:flex;
background: rgba( 255, 255, 255, 0.6 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
height:500px;
width:99%;
}
.graph{
	display:flex;
margin-left:10px;
margin-right:10px;
display:flex;
background: rgba( 255, 255, 255, 0.6 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
height:225px;
width:99%;
	
	
}
.dashboard{
margin-left:10px;
margin-right:10px;
display:flex;
background: rgba( 255, 255, 255, 0.6 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
height:225px;
width:99%;
}


.dash
{
margin-left:10px;
margin-top:10px;
height:200px;
width:24%;
background:#CED2CC;
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
.dashh
{
margin-left:10px;
margin-top:10px;
height:200px;
width:24%;
background:#1F3F49;
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
.dashhh
{
margin-left:10px;
margin-top:10px;
height:200px;
width:24%;
background:#D32D41;
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
.dashhhh
{
margin-left:10px;
margin-top:10px;
height:200px;
width:24%;
background:#DBAE58;
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
h2,h1{
 color: white;
  text-shadow: 2px 2px 4px #000000;

}
/*========================*/
.onevents{
background: rgba( 192, 100, 161, 0.6 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
height:700px;
width:100%;
}

/*========================*/
.certification{
background: rgba( 255, 255, 255, 0.6 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
height:500px;
width:100%;
}
/*========================*/
.footer{
margin-bottom:10px;
margin-left:5px;
margin-right:10px;
margin-top:10px;
border-radius:10px;
  height:550px;
  width:99%;
   background-color:black;
}
/*==================*/
.events{
display:block;
  background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
height:1000px;
width:100%;
}

.inner{
margin-left:10px;

  background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
height:550px;
width:200%;
overflow: hidden;
}
.inner1{
margin-left:10px;

  background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
height:450px;
width:200%;
overflow: hidden;
}

.sider{
margin-left:0px;
margin-top:20px;
margin-right:5px;
  background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
height:450px;
width:30%;
display:block;
}
iframe{

margin-left:25px;
margin-right:px;
 background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}

ifc{
margin-top:10px;
margin-left:25px;
margin-right:px;
 background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
/*=================================*/
* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.footer {
    background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("http://andreeabunget.co.uk/Img/footer.jpg");
    background-size: cover;
    
}



.first {
    margin-top: 40px;
    margin-bottom: 50px;
    color: rgb(206,206,206);
    font-family: 'Poppins', sans-serif;
}

    .first h4 {
        font-size: 20px;
        letter-spacing: 3px;
        position: relative;
        margin-bottom: 20px;
        font-size: 1.6em;
        color: #fff;
        padding-bottom: 0.5em;
    }

        .first h4::after {
            content: '';
            background: #66c83d;
            width: 20%;
            height: 2px;
            position: absolute;
            bottom: 0;
            left: 0;
        }

    .first p {
        font-size: 14px;
    }

.second {
    margin-top: 40px;
    margin-bottom: 50px;
    color: rgb(206,206,206);
    font-family: 'Poppins', sans-serif;
    text-align: center;
}

.second2 {
    margin-top: 40px;
    margin-bottom: 50px;
    color: rgb(206,206,206);
    font-family: 'Poppins', sans-serif;
    text-align: center;
}

.second h4 {
    font-size: 20px;
    letter-spacing: 3px;
    position: relative;
    margin-bottom: 20px;
    font-size: 1.6em;
    color: #fff;
    padding-bottom: 0.5em;
}

    .second h4::after {
        content: '';
        background: #66c83d;
        width: 20%;
        height: 2px;
        position: absolute;
        bottom: 0;
        left: 40%;
    }


.second li {
    list-style: none;
    padding-bottom: 30px;
}

.second a, .second2 a {
    color: rgb(206, 206, 206);
    text-decoration: none;
    letter-spacing: 3px;
    font-weight: bold;
    font-size: 14px;
    transition: 0.2s;
}

    .second a:hover, .second2 a:hover {
        color: #fff;
        transition: 0.2s;
        text-shadow: 1px 1px 20px rgba(0,0,0,1);
        text-decoration: none

    }



.third {
    margin-top: 40px;
    margin-bottom: 50px;
    color: rgb(206,206,206);
    font-family: 'Poppins', sans-serif;
    text-align: right;
}


    .third h4 {
        font-size: 20px;
        letter-spacing: 3px;
        position: relative;
        margin-bottom: 20px;
        font-size: 1.6em;
        color: #fff;
        padding-bottom: 0.5em;
    }


        .third h4::after {
            content: '';
            background: #66c83d;
            width: 20%;
            height: 2px;
            position: absolute;
            bottom: 0;
            left: 80%;
        }



    .third li {
        list-style: none;
        padding-bottom: 15px;
    }


    .third a {
        color: rgb(206, 206, 206);
        text-decoration: none;
        letter-spacing: 3px;
        font-weight: bold;
        font-size: 14px;
        transition: 0.2s;
    }


        .third a:hover {
            color: #fff;
            transition: 0.2s;
            text-shadow: 1px 1px 20px rgba(0,0,0,1);
        }


@media screen and (max-width:1000px) {
    .first {
        text-align: center;
    }

        .first h4::after {
            left: 40%;
        }
}

@media screen and (max-width:1000px) {
    .third {
        text-align: center;
    }

        .third h4::after {
            left: 40% !important;
        }
}

.margin {
    margin-left: 20px;
}

.line {
    height:2px;
    background-color:rgb(206,206,206);
    width:100%;
}

.container h1{
    text-align:center;
    margin-top:100px;
    margin-bottom:100px;
}
/*=================================*/
</style>
</head>
<body>
<div class="logo">
<div class="navbar">
   <div class="options">
   <ul>
   <li><a href="home2.html">Home</a></li>
   <li><a href="#dashboard">Dashboard</a></li>
   <li><a href="#events">Events</a></li>
   
   <li><a href="#certificate">Cerifications</a></li>
   <li><a href="organizeevents.php">Event Organisation Request</a></li>
    <li><a href="studentlogout.php">Logout</a></li></ul>
   </div>  
    <div class="options">  
   </div> 
</div>
<div class="logoo">
<img src="https://www.vidyanikethan.edu/wp-content/uploads/2017/12/logo-1.png"  width="125" height="80" >
</div>


</div>
<h1 style="float:right;font-size:20px;color:blue;font-weight:bold;text-shadow:none">Welcome <?php echo $_SESSION['UN'];?></h1>
<br><br>
  <!-- =================  -->
 <div class="profilepage">

 <header class="header">
 
    <div class="details">
	<a href="updateprofile.php" style="padding-left:1000px;font-size:20px;color:white;font-weight:bold">Update profile</a><br>
      <img src="<?php echo $link ?>" alt="upload image" class="profile-pic">
      
	  <form action="home3.php"  method="post" enctype="multipart/form-data">
            
            <input type="file" name="userfile" placeholder="event file" />
			<input type="submit" name="upload" value="upload">
            
            </form>
	
      
	  
      <div class="stats">
	  <div class="col-5">
	  <h1>Email-id</h1><h1 style="color:white;font-size:20px;"><?php echo $m;?></h1><br>
       </div> 
		<div class="col-3">
		<h1>Branch</h1>
          <h1 style="color:white;font-size:20px;"><?php echo $b; ?><h1>
          
        </div>
        <div class="col-4">
          
          <h1>Year</h1>
		  <h4 style="color:white;font-size:20px;"><?php echo $s; ?></h4>
        </div>
        <div class="col-4">
          <h4></h4>
          <p></p>
        </div>
      </div>
    </div>
  </header>
</div>
</html>
<div class="dashboard" id="dashboard">
   <div class="dash">
   <h2>No Of Events</h2> <pre> <!--h1>( <?php echo ($num);?> )</h1--></pre>
   </div>
   <div class="dashh"><h2>No Of Events Participated</h2><pre>      <!--h1>( <?php echo $row[1]; ?> )</h1--></pre>
   </div>
   <div class="dashhh"><h2>No Of Won</h2><pre>      <!--h1>( <?php echo $row[2]; ?> )</h1--></pre>
   </div>
   <div class="dashhhh"><h2>No Of Certifications</h2><pre>      <!--h1>( <?php echo $row[3]; ?> )</h1--></pre>
   </div>
   </div>
   <br><br>
   <div class="graph" >
   
        <iframe src="" width="95%" height="225px" style='overflow-y: hidden;' frameborder='0' seamless='seamless'>
</iframe>
<iframe src="" width="95%" height="225px" style='overflow-y: hidden;' frameborder='0' seamless='seamless'>
</iframe>
<iframe src="" width="95%" height="225px" style='overflow-y: hidden;' frameborder='0' seamless='seamless'>
</iframe>
   </div>
<!-- ======================================  -->


<!-- ======================================  -->-
 <br><br> 
 <div class="events" id="events">
 
<div class="inner" >
<h1>Current events</h1><br><br>
  <iframe src="stuevents.php" width="100%" height="500px" style='overflow-y: hidden;' frameborder='0' seamless='seamless'>
</iframe>


<!--iframe class="ifc" src="stuupevents.php" width="100%" height="200px" style="border:1px solid black;">
</iframe-->
  </div>
  
  <div class="inner1" >
<h1>Past events</h1><br><br>
  <iframe src="pastevents.php" width="100%" height="500px" style='overflow-y: hidden;' frameborder='0' seamless='seamless'>
</iframe>


<!--iframe class="ifc" src="stuupevents.php" width="100%" height="200px" style="border:1px solid black;">
</iframe-->
  </div>
</div>
<br><br> <br><br><br><br><br><br>
<!-- ======================================  -->
<div class="certification" id="certificate">
<h1>Certification</h1>
</div>
<br><br>
<!-- ======================================  -->
<div class="footer">
      <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="first">
                        <h4>About</h4>
                        <p> Analytical Skills</p>
                        <p> Problem-solving skills</p>
                        <p> Critical-thinking skills</p>
                        <p> Detail-oriented</p>
                        <p> Multitasking</p>
                        <p> Self-motivated</p>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="second">
                        <h4> Navigate</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Certification</a></li>
                            <li><a href="#">Events</a></li>
							<li><a href="#">Guiadance</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="third">
                        <h4> Contact</h4>
                        <ul>
                            <li>CETA</li>
                            <li></li>


                          <li><i class="far fa-envelope"></i> svne@gmail.com</li>
                            <li><i class="far fa-envelope"></i> email@yahoo.com</li>


                          <li><i class="fas fa-map-marker-alt"></i> TIRUPATI </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="line"></div>
                    <div class="second2">
                        <a href="https://codepen.io/AndreeaBunget" target="_blank"> <i class="fab fa-codepen fa-2x margin"></i></a>
                        <a href="https://github.com/WebDeveloperCodeRep" target="_blank"> <i class="fab fa-github fa-2x margin"></i></a>
                        <a href="https://www.linkedin.com/in/andreea-mihaela-bunget-a4248812b/" target="_blank"> <i class="fab fa-linkedin fa-2x margin"></i></a>
                        <a href="https://www.youtube.com/channel/UCX674BUbomzBCakbb75lhfA?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-2x margin" ></i></a>

                    </div>

                </div>
            </div>
            </div>
    </div>
   
</div>
 <!-- ======================================  -->
<script>

</script>
</body>
</html>
