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

<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.0.js"></script>
        <script type="text/javascript" src="calendar.js"></script>

        <style type="text/css">
<!--
.style2 {
	font-size: 18px;
	color: #666666;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style3 {font-size: 24px; color: #FF3366;}
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
								<li ><a href="Facilities.php" >Facilities</a></li>
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
											

					<div class="entry">
								<p align="center" class="style3">HM's Message</p>
								<p align="center">
				    
					
			<?php

include("connect.php");
$f=0;
$query = "select * from principal where status='Active'";

$row=mysql_query($query);
while($result = mysql_fetch_array($row))
  {
 	$desig=$result["designation"];

if($desig=='Head Master'){
$f=1;
 	$photo=$result["photo"];
 	$name=$result["name"];
 	$qualification=$result["qualification"];
 	$date=$result["doj"];
$doj = date( 'd-m-Y', strtotime($date));

}


 
	else if($desig=='In-Charge'){
if($f==0) {
$photo=$result["photo"];
 	$name=$result["name"];
 	$qualification=$result["qualification"];
 	$date=$result["doj"];
$doj = date( 'd-m-Y', strtotime($date));
	} }



?>
		<form name="ViewStaff" method="post" action="">
		
		  <p>&nbsp;</p>
		  <table width="550" height="360" border="2" align="right" >
		  
		  
		  
		  
		   <tr align=" ">
                        <td align="right">
                          <?PHP 

   echo '<img src="teacher/'.$photo.'"  style="width:228px;height:228px">';
?>
                        </span></td>
                    </tr>
		  
		  
		  
				<tr><td>&nbsp;</td></tr>

		<tr><td width="150" align="left"> <?PHP echo $name; ?></td></tr>
		<tr><td width="150" align="left"> <?PHP echo $qualification; ?></td></tr>

		<tr><td width="150" align="left"><?PHP echo $desig; ?></td></tr>
</table>
		</form>				
		<?php } ?>
		
		
		<p>&nbsp;		</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p class="style2">Dear All ,</p>
		<p class="style2">Welcome to  Govt. High School, Vechoor. </p>
		<p class="style2">Here at our school, we take special care in the upbringing of our beloved students. Education enhances the knowledge and intelligence of a person and enables him lead a successful life. In our school, we strive hard towards imparting in our pupils knowledge,  skill, and information  in order to make them self-reliant by acquiring moral and spiritual values. We develop within each student, a strong sense of self-worth, making them creative and able to confidently meet future challenges.</p>
		<p class="style2">We have a very eco-friendly campus along with a very wide playground to foster the physical fitness of our students. Our dedicated team of teaching and non-teaching staff, who have in-depth knowledge and experience in dealing with this wonderful age group of students, contribute towards the fast track growth and progress we have acheived so far. </p>
		<p class="style2">We are sure you will enjoy being a part of our growth.<br />
		</p>
		<p class="style2">HM		  </p>
		  </p>
					</div>
							</div>
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
								   <li><strong><a href="http://www.education.kerala.gov.in/" target="_blank">General Education Department</a></strong></li>

									<li><strong><a href="http://www.hsslive.in/" target="_blank">HSS Live</a></strong></li>
									<li><strong><a href="https://www.itschool.gov.in/" target="_blank">IT@School</a></strong></li>
									<li><strong><a href="http://sampoorna.itschool.gov.in/" target="_blank">Sampoorna</a></strong></li>
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
	<p>Copyright (c) 2016. All rights reserved. Maintained by RIT, Pampady</p>
</div>
<!-- end #footer -->
</body>
</html>
