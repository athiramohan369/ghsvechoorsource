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
<link href="csstab.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.0.js"></script>
</head>



   
	<?php
  $admno=$_GET['admno'];
  
?>

<?php

include("connect.php");

$query = "select * from student where admno=$admno ";
$result=mysql_query($query);


$row = mysql_fetch_array($result);
		 
 	$name=$row["name"];
	$Class=$row["Class"];
	$division=$row["division"];
	$gender=$row["gender"];
	$dob1=$row["dob"];
		$doadm1=$row["doadm"];
$photo=$row["photo"];
	$bloodgroup=$row["bloodgroup"];
	$hname=$row["hname"];
	$street=$row["street"];
		$city=$row["city"];
$state=$row["state"];
$pin=$row["pin"];
$fathersname=$row["fathersname"];
$mothersname=$row["mothersname"];

		$phone=$row['phone'];
		$aadharno=$row['aadharno'];
		$email=$row['email'];
	$dob = date( 'd-m-Y', strtotime($dob1));
$doadm = date( 'd-m-Y', strtotime($doadm1));

	
	
 //  echo $row['photo'];

 //echo '<img src="'.$s.'" alt="HTML5 Icon" style="width:128px;height:128px">';
	
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
														<p align="right"><a href="ViewClass.php"><strong> Go Back  </strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="Login.php"><strong>Logout</strong></a></p>

							<p class="meta"></p>
							<div class="entry">
															<p>
								
								<table align="center" width="350" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>
                          <?PHP 

   echo '<img src="student/student/'.$photo.'"  style="width:128px;height:128px">';
?>
                       </td>
                    </tr>
                      </table>
								
		<form name="StudDetails" method="post" action="">
		<p>&nbsp;</p>
		  <table class="one" align="right" width="550" border="2">
	<tr><td width="150" align="left"><span >Admission No</span></td><td><span class="style6">:</span> <?PHP echo $admno; ?></td></tr>

		<tr><td width="150" align="left"><span>Name</span></td><td><span class="style6">:</span> <?PHP echo $name; ?></td></tr>
		<tr><td width="150" align="left"><span >Class</span></td><td><span class="style6">:</span> <?PHP echo $Class; ?></td></tr>
		<tr><td width="150" align="left"><span >Division</span></td><td><span class="style6">:</span> <?PHP echo $division; ?></td></tr>
		<tr><td width="150" align="left"><span >Gender</span></td><td><span class="style6">:</span> <?PHP echo $gender; ?></td></tr>
		<tr><td width="150" align="left"><span >DOB</span></td><td><span class="style6">:</span> <?PHP echo $dob; ?></td></tr>
	<tr><td width="150" align="left"><span >DO Admission</span></td><td><span class="style6">:</span> <?PHP echo $doadm; ?></td></tr>
	<tr><td width="150" align="left"><span >Bloodgroup</span></td><td><span class="style6">:</span> <?PHP echo $bloodgroup; ?></td></tr>
		<tr><td width="150" align="left"><span >Address</span></td><td><span class="style6">:</span> <?PHP echo $hname; ?></td></tr>
		<tr><td width="150" align="left"><span ></span></td><td> <?PHP echo $street; ?></td></tr>
		<tr><td width="150" align="left"><span></span></td><td><?PHP echo $city; ?></td></tr>
		<tr><td width="150" align="left"><span></span></td><td><?PHP echo $state; ?></td></tr>
		<tr><td width="150" align="left"><span ></span></td><td><?PHP echo $pin; ?></td></tr>
		
<tr><td width="350" align="left"><span >Father's Name</span></td><td><span class="style6">:</span> <?PHP echo $fathersname; ?></td></tr>
<tr><td width="150" align="left"><span >Mother's Name</span></td><td><span class="style6">:</span> <?PHP echo $mothersname; ?></td></tr>
		<tr><td width="150" align="left"><span >Phone</span></td><td><span class="style6">:</span> <?PHP echo $phone; ?></td></tr>
		<tr><td width="150" align="left"><span >AADHAR No</span></td><td><span class="style6">:</span> <?PHP echo $aadharno; ?></td></tr>
	    <tr><td width="150" align="left"><span >E-mail</span></td><td><span class="style6">:</span> <?PHP echo $email; ?></td></tr>
		
	 <tr><td align="right"> <?php  echo "<td><a href='StudEdit.php?admno=$admno'>Click to Edit</a></td>";  ?></td></tr>

		
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
	<p>Copyright (c) 2016. All rights reserved. Maintained by RIT, Pampady.</p>
</div>
<!-- end #footer -->
</body>
</html>
