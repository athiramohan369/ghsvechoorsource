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
<style type="text/css">
<!--
.style2 {
	font-size: 24px;
	color: #FF3333;
	font-weight: bold;
}
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
						
					</div>
					<div id="content">
						<div class="post">
							<h2 class="title"><a href="#"> </a></h2>
							
							<p align="right"><a href="ContactAdmin.php"><strong>Go Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></a><a href="TeacherHome.php"><strong>Home</strong></a></p>
							
							<p class="meta"></p>
							<div class="entry">
								<p>  
							  <p>
				            <?php 
	
require_once("connect.php");
	          $sq="SELECT DISTINCT teacher FROM reply";

	   $rc=mysql_query($sq);
	   		?>
			              </p>
				          
				          <p align="center" class="style2">Select your name to view replies                   </p>
				          <form name="vmsg" method="post" action="">		
		<table class="one" align="center" width="310" border="2">
		
		
		<tr><td><span class="style3">Teacher Name</span></td>
		<td>
		  <p>
		    <select name="teacher">
		      <?php
		while ($cs=mysql_fetch_assoc($rc)){
		$val=$cs[teacher];
		?>
		      <option value="<?php print $val;?>"><?php print $val;?></option>
		      <?php }?>
		      </select>
		  </p>
		  </td></tr>
		  
		  
		  
		  
		  
		  
		  
		
		
		<tr><td><input type="submit" value="Show Replies" name="lbt"/>
		</table>
		</form>
		
		

		                  <p>
		                    <?php
        if(isset($_POST["lbt"]))
        {		
			   $teach=$_POST["teacher"];
			   
			   echo "<center><h1>Messages &nbsp; &nbsp; to &nbsp; &nbsp;   $teach</h1>";   
			   
			   
		$result=mysql_query("SELECT * FROM reply where teacher='$teach' order by day Desc" );


		$k=0; 
	   while($row = mysql_fetch_array($result))
	   
	{

			$tym=$row[2];
	$day = date( 'd-m-Y', strtotime($tym));

		$msg=$row[2];
	
		$k++;
		?>
		                    </p>
		                  <p>&nbsp;                </p>
		                  <table align="center" width="450" border="0" class="one">
<tr><th class="style3">No</th><th class="style3">Date</th><th class="style3">Replies</th>
		</tr>
				 	

		<tr><td width="70"><?php echo $k; ?></td> 
		<td width="70"><?php echo $day; ?></td> 
		<td width="300"><?php 
		echo '<font size="5"'." color='black'>";

		echo "<b> $msg </b>"; 
				 echo "</font>";
?></td> 
</tr>
		
<?php } ?>
				 		<tr><td>&nbsp;</td></tr>
	   
	   
			   
	<?php		   
       }
	     ?>
				</table>				
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
	<p>Copyright (c) 2016 . All rights reserved. Design by RIT, Pampady.</p>
</div>
<!-- end #footer -->
</body>
</html>
