<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Govt.HSS, Vechoor</title>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="logn.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.0.js"></script>
        <script type="text/javascript" src="calendar.js"></script>

<style type="text/css">
<!--
.style1 {
	color: #FF3366;
	font-size: 36px;
	font-weight: bold;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<?php
session_start();
include("connect.php");
if(isset($_POST['btsubmit']))
{
	
	$uname= mysql_real_escape_string($_POST['uname']);
	$password= mysql_real_escape_string($_POST['password']);
	//$utype= mysql_real_escape_string($_POST['utype']);


$uid=mysql_query("select * from login where uname='".$uname."' and password='".$password."'");
if($res=mysql_fetch_array($uid))
{ 
	      if($res[2]=="admin")
			 {
				   $_SESSION['hxt']=$uname;
 				   header('Location:AdminHome.php');
			 }
			else if($res[2]=="staff")
					{
			
						$_SESSION['din']=$uname;
 						header('Location:StaffHome.php');
					}
					
			else if($res[2]=="teacher")
					{
			
						$_SESSION['abc']=$uname;
 						header('Location:TeacherHome.php');
					}	
			
			
			
}
else
{
$val=1;

echo '<script language="javascript">';
echo 'alert("Please Enter Valid Login Credentials  ")';
echo '</script>';

}
}
?>



<body>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="page-content">
					<div id="header-wrapper">
						<div id="header">
							<div id="logo">
								<h1><a href="#">Govt. High School, Vechoor</a></h1>
								<p>&nbsp;</p>
						  </div>
						</div>
					</div>
					<!-- end #header -->
					<div id="menu-wrapper">
						<div id="menu">
							<ul>
								<li ><a href="index.php">Home Page</a></li>
								<li><a href="AboutUs.php" >About Us</a></li>
								<li><a href="Facilities.php" >Facilities</a></li>
								<li><a href="Gallery.php" >Gallery</a></li>
								<li><a href="Contact.php" >Contact Us</a></li>
								
								</li>

								
				
		
								
								
							</ul>
						</div>
					</div>
					<!-- end #menu -->
					<div id="banner">
						
					</div>
					<div id="content">
						<div class="post">
							<h2 class="title"><a href="#"> </a></h2>
							<p class="meta"></p>
							<div class="entry">
								<p>
								
								
								
								
								
								
								
								
							  <span class="style7"><span class="style8">
								 </span> </span>
				
										<p align="center" class="style1">&nbsp;
		
			
                                        <button1 onclick="document.getElementById('id01').style.display='block'" style="width:auto;">&nbsp;&nbsp;&nbsp;Click to Login</button1>
</p>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="Login.php" method="post" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="containerr">
	        <p>&nbsp;</p>

      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        <p>&nbsp;</p>
      <p align="center"><button name="btsubmit" type="submit">Login</button></p>

    </div>

   
  </form>
</div>
					
								
								
								
								
						
								
								
								
								
								</p>
							</div>
						</div>
						
						<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->
					<div id="sidebar">
						<ul>
							
							<li>
								<h2>Categories</h2>
								<ul>
								<li><b><a href="Principal.php">HM's Message</a></b></li>
								<li><b><a href="Teacher.php">Faculty</a></b></li>
								<li><b><a href="Library.php">Library</a></b></li>
								<li><b><a href="Gallery.php">Gallery</a></b></li>
								<li><b><a href="Club.php">School Clubs</a></b></li>
							
								<li><b><a href="Pta.php">PTA</a></b></li>

							</ul>
								
								
							</li>
							<li>
								<h2>Calendar</h2>
								<p>
								
								<script type="text/javascript">
            calendar();
        </script>
								
								
								</p>
							</li>
							<li>
								<h2>Important Links</h2>
								<ul>
								   <li><a href="http://www.education.kerala.gov.in/" target="_blank">General Education Department</a></li>

									<li><a href="http://www.hsslive.in/" target="_blank">HSS Live</a></li>
									<li><a href="https://www.itschool.gov.in/" target="_blank">IT@School</a></li>
									<li><a href="http://sampoorna.itschool.gov.in/" target="_blank">Sampoorna</a></li>
									
								</ul>
							</li>
							<li>
								<h2>connect with us  at </h2>
								<ul>
									<li><a href="http://ghsvechoor.blogspot.in/2012/02/blog-post.html" target="_blank">Our Blog</a></li>

									<li><a href="https://www.facebook.com/ghsvechoor" target="_blank">Facebook</a></li>
									
								</ul>
							</li>
						</ul>
					</div>
					<!-- end #sidebar -->
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2016 . All rights reserved. Maintained by RIT, Pampady.</p>
</div>
<!-- end #footer -->
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
