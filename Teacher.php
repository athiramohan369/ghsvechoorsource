
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
<style type="text/css">
<!--
.style2 {
	font-size: 24px;
	color: #0066FF;
	font-weight: bold;
}
.style3 {
	font-size: 18px;
	color: #FF33CC;
}
.style4 {
	font-size: 36px;
	color: #FF3366;
}
.style5 {
	color: #FF99FF;
	font-size: 16px;
}
.style6 {font-weight: bold}
.style8 {
	color: #FF3366;
	font-size: 16px;
}
-->
</style>
</head>



   

<?php

include("connect.php");

$query = "select * from teacher where status='Active' order by doj asc";
$result=mysql_query($query);



	
	
	
	
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
							<p class="meta"></p>
							<div class="entry">
								<p align="center" class="style2 style4"> Faculty Details</p>
								


<?PHP
while($row = mysql_fetch_array($result))
  {
  $name=$row["name"];
  $tid=$row["tid"];

    $qualification=$row["qualification"];

  $designation=$row["designation"];
		$date=$row["doj"];

	$s=$row['photo'];
	
	

// $phpdate = strtotime( $doj );
//$doj = date( 'd-m-Y', $phpdate );

$doj = date( 'd-m-Y', strtotime($date));

?>










		<form name="ViewStaff" method="post" action="">
		
		  <p>&nbsp;</p>
		  <table width="550" height="150" border="2" align="right" >
		  
		  
		  
		  
	<!--	   <tr align=" ">
                        <td align="right">
                          <?PHP 

 //  echo '<img src="teacher/'.$s.'"  style="width:128px;height:128px">';
?>
                        </span></td>
                    </tr>  -->
		  
		  
		  
				<tr><td>&nbsp;</td></tr>

		<tr><td width="150" align="left"><span class="style8">*</span>&nbsp; <?PHP echo $name; ?></td>
		</tr>
		<tr><td width="150" align="left"> <?PHP echo $qualification; ?></td></tr>

		<tr><td width="150" align="left"><?PHP echo $designation; ?></td></tr>
		<tr><td width="150" align="left">Joined on <?PHP echo $doj; ?></td></tr>
			
</table>
		</form>				
	<p class="style3 style5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style5">.........................................</span></p>					
		<?php } ?>						
								
								
								
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
								<ul class="style6">
								   <li><a href="http://www.education.kerala.gov.in/" target="_blank">General Education Department</a></li>

									<li><a href="http://www.hsslive.in/" target="_blank">HSS Live</a></li>
									<li><a href="https://www.itschool.gov.in/" target="_blank">IT@School</a></li>
									<li><a href="http://sampoorna.itschool.gov.in/" target="_blank">Sampoorna</a></li>
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
	<p>Copyright (c) 2012 Sitename.com. All rights reserved. Design by RIT, Pampady.</p>
</div>
<!-- end #footer -->
</body>
</html>
