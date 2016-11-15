<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Govt.HSS, Vechoor</title>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="style1.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.0.js"></script>
        <script type="text/javascript" src="calendar.js"></script>
        <style type="text/css">
<!--
.style2 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 18px; color: #666666;}
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
							<h2 class="title"><a href="#">Welcome to OUR website </a></h2>
							<p class="meta"></p>
							<div class="entry">
								<p><span class="style2"> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Govt. High School, Vechoor is run by the Government of Kerala. Founded in the year 1934, this institution was established with a vision to impart in it's pupils, self-confidence and self-dependence and make them strong physically and mentally. Our keen focus is at the overall development of our students under the guidance of a team of dedicated teachers.</span></p>
								<p><img src="images/abc.jpg" width="628" height="250" alt="" class="border" /></p>
							</div>
						    <p>&nbsp;</p>
					  </div>
					  <div class="post">
							<h2 class="title"><a href="#">Latest News and events</a></h2>
							<p class="meta"></p>
							<div class="entry">
						
						
						
						
						
						
						
						
						
								<h3>&nbsp;</h3>

							
            <!--<img src="images/aw1.jpg" alt="" width="270" height="154" class="img-border">-->
            <p align="center">   <marquee  align="middle" behavior="scroll" direction="up" height="150" width="450" scrollamount="2" scrolldelay="10" onMouseOver="this.stop()" onMouseOut="this.start()">
			 
	
			
		 <?php 
		
      include("connect.php");
		$sql1=mysql_query("SELECT * FROM news where status='show'  ORDER BY nid asc")or die(mysql_error());
		 while($row=mysql_fetch_array($sql1)){
		 
		 
 	$nid=$row["nid"];
	$description=$row["description"];
	$title=$row["title"];
		 
		
echo '<font size="4"'." color='black'>";

//echo '<i style="color:blue;font-size:30px;font-family:calibri ;">
//hello php color </i> ';
		  echo "<li><a href='News.php?nid=$nid&description=$description&title=$title' style='color:DARKVIOLET'>".$row['title']. " </a></li><br>";
		 echo "</font>";

		}
	    
   ?></marquee></p>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
			
						
						
							</div>
						    <p>&nbsp;</p>
					  </div>
						<div class="post">
							<h2 class="title"><a href="#">a peek into our creative happenings.. !! </a></h2>
							<p class="meta"></p>
						  <div class="entry">
								<p><a href="ViewAlbums.php?albumname=Artworks%20by%20Reghunath%20Sir"><img src="images/rsr.jpg" width="628" height="300" alt="" class="border" /></a></p>
							    <p>&nbsp;</p>
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
								   <li><b><a href="http://www.education.kerala.gov.in/" target="_blank">General Education Department</a></li>

									<li><a href="http://www.hsslive.in/" target="_blank">HSS Live</a></li>
									<li><a href="https://www.itschool.gov.in/" target="_blank">IT@School</a></li>
									<li><a href="http://sampoorna.itschool.gov.in/" target="_blank">Sampoorna</a></b></li>
									
								</ul>
							</li>
							<li>
								<h2>connect with us  at </h2>
								<ul>
									<li><b><a href="http://ghsvechoor.blogspot.in/2012/02/blog-post.html" target="_blank">Our Blog</a></li>

									<li><a href="https://www.facebook.com/ghsvechoor" target="_blank">Facebook</a></b></li>
									
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
