<?php if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:Login.php');
    exit;
}?>
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
<link href="reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="csstab.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.0.js"></script>
<style type="text/css">
<!--
.style2 {font-weight: bold}
.style3 {font-size: 18px}
-->
</style>
</head>





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
								<li class="current_page_item"><a href="index.php">Home Page</a></li>
								<li><a href="AboutUs.php" >About Us</a></li>
								<li><a href="Facilities.php" >Facilities</a></li>
								<li><a href="Gallery.php" >Gallery</a></li>
								<li><a href="Contact.php" >Contact Us</a></li>
								<li><a href="Login.php" >Login</a></li>
								
								
				
		
								
								
							</ul>
						</div>
					</div>
					<!-- end #menu -->
					<div id="banner">
						<div id="slider">
							<div class="viewer">
								<div class="reel">
									<div class="slide"> <img src="images/a1.jpg" alt="" /> </div>
									<div class="slide"> <img src="images/a2.jpg" alt="" /> </div>
									<div class="slide"> <img src="images/a3.jpg" alt="" /> </div>
								</div>
							</div>
						</div>
						<script type="text/javascript">
				$('#slider').slidertron({
					viewerSelector: '.viewer',
					reelSelector: '.viewer .reel',
					slidesSelector: '.viewer .reel .slide',
					advanceDelay: 3000,
					speed: 'slow'
				});
			</script>
					</div>
					<div id="content">
						<div class="post">
							<h2 class="title"><a href="#"> </a></h2>
							<p class="title">&nbsp;</p>
							<p align="right"><a href="TViewStudent.php"><strong> Go Back  </strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="Login.php"><strong>Logout</strong></a></p>

							<p class="meta"></p>
							<div class="entry">
								<p>
								
								
	
								 <?php
session_start();
include("connect.php");
if(isset($_POST['btsubmit']))
{
	$Class= mysql_real_escape_string($_POST['Class']);
		$division= mysql_real_escape_string($_POST['division']); 
 
	?>							
								
								<p align="center"><span class="style3">Class</span> &nbsp;&nbsp;<?php echo $Class; ?>&nbsp;<?php echo $division; ?></p>
								
						
	
								<form name="Viewstud" method="post" action="">
		
		  <p>&nbsp;</p>
		  <table align="left" width="550" border="2" class="one">
		<tr><th><span class="style2">Adm No</span></th>
		<th><span class="style2">Name</span></th>
		<th><span class="style2">Gender</span></th>
		<th><span class="style2">Phone</span></th>
		
		
		<?PHP 
$stud=mysql_query("select * from student where Class='".$Class."' and division='".$division."'");
while($row=mysql_fetch_array($stud))
  {
  $admno=$row["admno"];
	$name=$row["name"];
	$gender=$row["gender"];
	//$date=$row["dob"];
	$phone=$row["phone"];
	//$dob = date( 'd-m-Y', strtotime($date));

?>






		<tr><td><?php echo $admno; ?></td> <?php  echo "<td><a href='TStudDetails.php?admno=$admno'>$name</a></td>";  ?>
<td><?php echo $gender; ?></td><td><?php echo $phone; ?></td></tr>
		
<?php } }?>


</table>
		</form>
											      
				 			  	



















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
								<h2>Important Links</h2>
								<ul>
								   <li><a href="http://www.education.kerala.gov.in/" target="_blank">General Education Department</a></li>

									<li><a href="http://www.hsslive.in/" target="_blank">HSS Live</a></li>
									<li><a href="https://www.itschool.gov.in/" target="_blank">IT@School</a></li>
									<li><a href="http://sampoorna.itschool.gov.in/" target="_blank">Sampoorna</a></li>
									
								</ul>
							</li>
							<li>
								<h2></h2>
								<ul>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>
							</li>
							<li>
								<h2></h2>
								<ul>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
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
</body>
</html>
