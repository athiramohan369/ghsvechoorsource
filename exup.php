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
.style1 {
	color: #FF3399;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
</head>

<?php

session_start();
include("connect.php");

?>



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
							<h2 class="title"><a href="#"> </a></h2>							<p align="right"><a href="excelphoto.php"><strong> Go Back</strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="Login.php"><strong> Logout</strong></a></p>

							<p class="meta"></p>
							<div class="entry">
								<p>
								
								
							<p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1">Choose the file to update student details</span>				              </p>
							<p>&nbsp;</p>
				            </p>	
								
								
								
		

                        <!-- The code below is used for uploading student details to the student table of database 
                             It is done using an excel file of student details given in an order 
                             All details except the student photos are updated here-->




						
								
								
<form name="import" method="post" enctype="multipart/form-data">
Choose an excel file to upload :
  <input type="file" name="fileupload" size="45" />
<input type="submit" name="submit" value="submit" />
</form>
<?php

$file="";
if(isset($_POST['submit']))
{
$file = $_FILES["fileupload"]["tmp_name"]; // name of excel file 
$handle = fopen($file, "r");             // excel file is opened in read mode
$c = 0;
$name="";
while(($filesop = fgetcsv($handle, 1000, ",")) !== false) // each row of the file is read one by one
{
$admno = $filesop[0];                                    // The student details are taken from the excel file to the student table 
$name = $filesop[1];
$class = $filesop[2];
$division = $filesop[3];
$gender = $filesop[4];
$dob = $filesop[5];
$doadm = $filesop[6];
$bloodgroup = $filesop[7];
$hname = $filesop[8];
$street = $filesop[9];
$city = $filesop[10];
$state = $filesop[11];
$pin = $filesop[12];
$fathersname = $filesop[13];
$mothersname = $filesop[14];
$phone = $filesop[15];
$aadharno = $filesop[16];
$email = $filesop[17];






// The details from excel file are inserted to the the student table one row at a time






$sql="insert into student (admno,name,Class,division,gender,dob,doadm,bloodgroup,hname,street,city,state,pin,fathersname,mothersname,phone,aadharno,email) values('".$admno."','".$name."','".$class."','".$division."','".$gender."','".$dob."','".$doadm."','".$bloodgroup."','".$hname."','".$street."','".$city."','".$state."','".$pin."','".$fathersname."','".$mothersname."','".$phone."','".$aadharno."','".$email."')";

mysql_query($sql);

$c = $c + 1;




				   
			   

}


if($sql){
echo "You database has imported successfully. You have inserted ". $c ." records";   // Successful updation shows this message
}else{
echo "Sorry! There is some problem.";  // Unsuccessful updation shows an error message
}
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
								<h2>Calendar</h2>
								<p></p>
							</li>
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
