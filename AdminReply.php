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
.style2 {
	color: #333333;
	font-size: 24px;
}
.style3 {font-size: 24px}
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
						
					</div>
					<div id="content">
						<div class="post">
							<h2 class="title"><a href="#"> </a></h2>
							<p align="right"><a href="AdminHome.php"><strong> Home  </strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="VMessage.php"><strong>Go Back</strong></a></p>
							<p class="meta"></p>
							<div class="entry">
								<p>
								
								
				
				<!-- The variable sender is initiated with the name of sender passed from the previous page  -->

								
				
						<?php
  $Sender=$_GET['Sender'];

?>			
		
		
			<!-- The code below is used to reply to the sender's message by admin  -->

		
												
		<?php 
	include("connect.php");
       $sq="SELECT * FROM reply";
	   $zz=1;
	   $rc=mysql_query($sq);
	   while($row=mysql_fetch_array($rc))
	{						
			$zz++;
			
			
			}					
	?>							
								
						      <p>
				          
			              </p>
				          <p><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span ><?php 
	require_once("connect.php");
	$r=$Sender;
	echo "<center>Reply&nbsp; to &nbsp; &nbsp;$r";   ?>
</span> </h1>
				          </p>
				          
						  
						  
			<!-- The form below is used to type in admin's reply  -->

						  
						  
						  
						  
				          <p>&nbsp;                  </p>
				          <form name="Reply" method="post" action="">		
		<table  id="t01" align="center" width="510" border="2">
		
		
		<tr>
		  <td><span class="style3 style2">Reply</span></td>
		  <td>
		  <textarea name="BMtext"  placeholder="Type in the reply here..." rows="3" cols="45"></textarea>
		
		    </td></tr>
		<tr><td><input type="submit" value="Insert" name="lbt"/>
		</table>
		</form>
		
		
					<!-- The code below is used to insert number of reply, receiver's name, time of reply and admin's reply into reply table of school database  -->

		
		
		<?php
        if(isset($_POST["lbt"]))
        {		
			   $b=date('Y-m-d H:i:s');
			   $d=$_POST["BMtext"];
			  		   
			
				   require_once("connect.php");
				   $q="insert into reply values('".$zz."','".$Sender."','".$d."','".$b."')";			   
				   mysql_query($q);
				   
			   
			   header("location:VMessage.php");
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
