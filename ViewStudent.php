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


<!-- The code below is used to include the different scripts used   -->




<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.0.js"></script>
<style type="text/css">
<!--
.style1 {
	color: #FF3399;
	font-size: 24px;
}
.style2 {color: #FF33CC}
.style3 {color: #FF33CC; font-size: 24px; }
.style4 {color: #FF3399}
-->
</style>
</head>





<body>



<!-- The code below is used for links used commonly in all pages   -->






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
							<p align="right"><a href="Student.php"><strong>Go Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></a><a href="Login.php"><strong>Logout</strong></a></p>
							<p class="meta"></p>
							<div class="entry">
							<p align="center" class="style1">Search Student Details </p>
								<p>
								
								
								
								
								  <?php 
	
require_once("connect.php");
       $sq="SELECT * FROM student";
	   $rc=mysql_query($sq);
	   		?>
  
  
								
								
						<!-- The form below is used to search student details -->
		
								
								
								
  
  						
			<form action="ViewStudent.php" method="post">
        <input type="text" name="query" />
        <input type="submit" value="Search" name="sub" />
    </form>					
								
								
								
	<?php
	
	                                    // this code implements dynamic search on student details
	
	if(isset($_POST["sub"]))
	{
	
    $query = $_POST['query']; 
   
         
        $query = htmlspecialchars($query);       //variable initialised with the characters to search
         
        $query = mysql_real_escape_string($query);
         
		 
		 
		 
		 
		 // search is done on all fields of the student table of the  database as shown below using like clause
		 
		 
		 
		 
		 
		 
        $raw_results = mysql_query("SELECT * FROM student
            WHERE (`admno` LIKE '%".$query."%') OR (`name` LIKE '%".$query."%') OR (`gender` LIKE '%".$query."%') OR (`division` LIKE '%".$query."%') OR (`Class` LIKE '%".$query."%') OR (`fathersname` LIKE '%".$query."%') OR (`mothersname` LIKE '%".$query."%') OR (`bloodgroup` LIKE '%".$query."%') OR (`hname` LIKE '%".$query."%') OR (`street` LIKE '%".$query."%') OR (`city` LIKE '%".$query."%') OR (`state` LIKE '%".$query."%') OR (`phone` LIKE '%".$query."%') OR (`aadharno` LIKE '%".$query."%') OR (`email` LIKE '%".$query."%')OR (`dob` LIKE '%".$query."%')OR (`doadm` LIKE '%".$query."%')");
             
       
         
        if(mysql_num_rows($raw_results) > 0){ 
             
            while($row = mysql_fetch_array($raw_results)){
			
			$admno=$row["admno"];          // variables initialised with the fields of search results one row at a time
			
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

	?>			
	
	
	
	
	
	
								
								
						<!-- The form below is used to display search results -->
		
								
								
								
	
	

				<table align="center" width="550" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>
                          
                        </td>
                    </tr>
					  <tr>
                        <td>
                          <?PHP 

   echo '<img src="student/student/'.$photo.'"  style="width:128px;height:128px">';
?>
                       </td>
                    </tr>
                      </table>
								
		
		  <table align="right" width="550" border="2">
	<tr><td width="150" align="left"><span >Admission No</span></td><td><span class="style6">:</span> <?PHP echo $admno; ?></td></tr>

		<tr><td><span>Name</span></td><td><span class="style6">:</span> <?PHP echo $name; ?></td></tr>
		<tr><td><span >Class</span></td><td><span class="style6">:</span> <?PHP echo $Class; ?></td></tr>
		<tr><td><span >Division</span></td><td><span class="style6">:</span> <?PHP echo $division; ?></td></tr>
		<tr><td><span >Gender</span></td><td><span class="style6">:</span> <?PHP echo $gender; ?></td></tr>
		<tr><td><span >DOB</span></td><td><span class="style6">:</span> <?PHP echo $dob; ?></td></tr>
	<tr><td><span >DO Admission</span></td><td><span class="style6">:</span> <?PHP echo $doadm; ?></td></tr>
	<tr><td><span >Bloodgroup</span></td><td><span class="style6">:</span> <?PHP echo $bloodgroup; ?></td></tr>
		<tr><td><span >Address</span></td><td><span class="style6">:</span> <?PHP echo $hname; ?></td></tr>
		<tr><td width="150" align="left"><span ></span></td><td> <?PHP echo $street; ?></td></tr>
		<tr><td width="150" align="left"><span></span></td><td><?PHP echo $city; ?></td></tr>
		<tr><td width="150" align="left"><span></span></td><td><?PHP echo $state; ?></td></tr>
		<tr><td width="150" align="left"><span ></span></td><td><?PHP echo $pin; ?></td></tr>
		
<tr><td><span >Father's Name</span></td><td><span class="style6">:</span> <?PHP echo $fathersname; ?></td></tr>
<tr><td><span >Mother's Name</span></td><td><span class="style6">:</span> <?PHP echo $mothersname; ?></td></tr>
		<tr><td><span >Phone</span></td><td><span class="style6">:</span> <?PHP echo $phone; ?></td></tr>
		<tr><td><span >AADHAR No</span></td><td><span class="style6">:</span> <?PHP echo $aadharno; ?></td></tr>
	    <tr><td><span >E-mail</span></td><td><span class="style6">:</span> <?PHP echo $email; ?></td></tr>
			    <tr><td><span class="style2">..............................................</span></td>
			    </tr>

		
</table>
		
				
				
				
		<?PHP	
				
				
				
				
				
				
				
            }
             
        }
        else{                                         // if there is no matching rows, a message is displayed
            echo "No results";
        }
         
   
   
	}
?>
						
		<p align="center" class="style3">&nbsp;</p>						
						
		<p align="center" class="style3 style4">Enter class and division to view class wise list below..</p>						
  
  
  
								
								
						<!-- The form below is used to view classwise student details  -->
		
								
								
								
  
  
  
    <form action="ViewClass.php" method="post">
  <table width="371" height="176" border="1">
  <tr>
    <td><span >
      <label>Enter Class </label>
    :</span></td>
	
	<td><label>
                        <select name="Class" >
                          <option value="1">1</option>                          
						    <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>

                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                      </label></td>
	
	
	
  </tr>
  
  <tr>
    <td><span >
      <label>Enter Division </label>
    :</span></td>
	
	<td><label>
                        <select name="division" >
                          <option value="A">A</option>                          
						    <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                        <option value="E">E</option></select>
                      </label></td>
	
	
	
  </tr>
  
  
 
   <tr>
     <td><input name="btsubmit" type="submit" value="Submit"/> </td>
	 <td> <a href="AdminHome.php">Cancel</a> </td>
   </tr>
</table>
</form>
	
								
								
								
								
								
						
								
								
								
								
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
