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

<!-- The code below is used to include the different style sheets used   -->


<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="csstab.css" rel="stylesheet" type="text/css" media="screen" />

<!-- The code below is used to include the different scripts used   -->



<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.0.js"></script>
<style type="text/css">
<!--
.style1 {color: #FF3366}
-->
</style>
</head>


<!-- The code below is used for links used commonly in all pages   -->



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
							
							<p align="right"><a href="ContactAdmin.php"><strong>Go Back</strong></a></p>
							
							<p class="meta"></p>
							<div class="entry">
								<p>
								
								
								
								
								
			<!-- Data retrieved from the teacher table in the school database -->
					
								
								
						      <p>
				            <?php 
	
require_once("connect.php");
       $sq="SELECT * FROM teacher";
	   $rc=mysql_query($sq);
	   		?>
			              </p>
						  
						  
						  <!-- The form for adding messages by teachers to admin is given below   -->

						  
						  
						  
				          <p><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1">Add Your Messages here</span> </h2>
				          </p>
				          <p>&nbsp;</p>
				          <p>&nbsp;                  </p>
				          <form name="Message" method="post" action="">		
		<table class="one" align="center" width="310" border="2">
		<tr><td><span class="style3">Teacher ID</span></td>
		<td>
		  <p>
		    <select name="TItext">
		      <?php
		while ($cs=mysql_fetch_assoc($rc)){
		$val=$cs[name];
		?>
		      <option value="<?php print $val;?>"><?php print $val;?></option>
		      <?php }?>
		      </select>
		  </p>
		  </td></tr>
		
		<tr>
		  <td><span class="style3">Message</span></td>
		  <td><p>
		  <textarea name="BMtext"></textarea>
		</p>
		    </td></tr>
		<tr><td><input type="submit" value="Insert" name="lbt"/>
		</table>
		</form>
		
		
		<!-- The code below is used to insert the name of sender, date and the message typed into the message table of school database   -->

		
		<?php
        if(isset($_POST["lbt"]))
        {		
			   $a=$_POST["TItext"];
			   $b=date('Y-m-d H:i:s');
			   $d=$_POST["BMtext"];
			  		   
			
				   require_once("connect.php");
				   $q="insert into message values('".$a."','".$b."','".$d."')";			   
				   mysql_query($q);
				   
			   
			   header("location:TeacherHome.php");
       }
        ?>
								
								
								
								
								
						
								
								
								
								
								</p>
							</div>
						</div>
						
						<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->


					<!-- The code below is used for links on the right side of all pages   -->



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
	<p>Copyright (c) 2016 . All rights reserved. Design by RIT, Pampady.</p>
</div>
<!-- end #footer -->
</body>
</html>
