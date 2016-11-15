
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
.style2 {font-size: 18px}
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
							<h2 class="title"><a href="#"> </a></h2><p align="right"><a href="excelphoto.php"><strong> Go Back  </strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="Login.php"><strong> Logout</strong></a></p>
							<p class="meta"></p>
							<div class="entry">
								<p>
										
				            <p align="center">
				            <p align="center">
			              
				            <h2 align="center"><span class="style1">Upload Students' photo</span></h2>
				            <h2 align="center">&nbsp;</h2>
				            <h2 align="center"> 
				              </p>
				              </h2>
							  
							  
							  	
								
		

                        <!-- The code below is used for uploading student photos to the student table of database 
                             It is uploaded using a zipped folder of all photos 
                             Photos are named same as the admission number of students-->




						
							  
				            <?php
require_once 'connect.php'; 
$dirname="student";     // directory to store student photos
if(isset($_POST['submit'])) {
if($_FILES["zip_file"]["name"]) { // pull the name of the zip file from the upload
    $filename = $_FILES["zip_file"]["name"];   // original file name
	    $source = $_FILES["zip_file"]["tmp_name"]; // system generated temporary name

}

$zip = new ZipArchive(); // to extract the zip file

if ($zip->open($source) === TRUE) {
    $zip->extractTo($dirname."/");
    $zip->close();
} else {
    echo 'Process failed'; // Error message
}



 
$dir = "student/student/";  // target directory of photos


 

if ($handle = opendir($dir)) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
$file = basename($entry, ".png"); 
			
	
$q="update student set photo='$entry' where admno=$file";	//photo with same name as admission number is inserted to the student table photo field
mysql_query($q);
			
			
			

        }
    }

    closedir($handle);
}



}

?>
						
									
								
		

                        <!-- The below form uploads the zip folder of student photos-->




						
			
<form enctype="multipart/form-data" method="post" action="photoupload.php">
      
<!--< />-->
<label>Choose a zip file to upload: <input type="file" name="zip_file" /></label>
<br />
<input type="submit" name="submit" value="Upload" /> 
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
