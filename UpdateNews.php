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
	color: #FF3399;
	font-weight: bold;
}
-->
</style>
</head>


<?php
session_start();
include("connect.php");


$query = "select * from news";

$result=mysql_query($query);                                 //code to set news id automatically
$i = 1;
while($row = mysql_fetch_array($result))
  {
  $i++;
  }

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
							<h2 class="title"><a href="#"> </a></h2>							<p align="right"><a href="UpNews.php"><strong> Go Back</strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="Login.php"><strong>Logout</strong></a></p>

							<p class="meta"></p>
							<div class="entry">
								<p>
								
								
								
								
								
								
								
						   
			              </p>
						  
						  
						  
						  
						  
						  <!-- The form below inserts the news details into the news table of school database -->





				          <p>
				          <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style2">Update News and Events</span> </h2>
				          <form name="UpdateNews" method="post" action="UpdateNews.php" enctype="multipart/form-data">
				          <table class="one" align="center" width="450" border="2">
		<tr><td>&nbsp;</td>
		</tr>
		
		<tr><td><b>News Id</b></td><td><input type="text" name="nid" readonly="readonly" value="<?php  echo "$i"; ?>" size="45" /></td></tr>
		<tr><td><b>Title</b></td><td><input type="text" name="title" size="45" /></td></tr>
		

		
		<tr><td><b>Description</b></td><td><textarea name="description" size="45"></textarea></td></tr>
		<tr><td><b>Image</b></td>
		<td>
		    Select Image: <input type="file" name="image" />
		     
		          
		    </td></tr>   
			
			
			
			
			<tr><td><b>Status</b></td><td><label>
                        <select name="status" >
                          <option value="Show" selected="selected">Show</option>
                          <option value="Expired" >Expired</option>
                        </select>
                      </label></td></tr>
			
			
			      
		<tr><td><input type="submit" value="Submit" onClick="alert('Click to submit');" name="submit"/>

		<th><a href="AdminHome.php"><font color="#0066FF"><b>Cancel</b></font></a></th></td></tr>
		</table>
		</form>
								
								
								
			<!-- The code below inserts the news details into the news table of school database -->
					
								
								
	<?php
	
	


if(isset($_POST['submit']))
{

$nid=$_POST["nid"];                                       //all inserted details are stored into variables
$title=$_POST["title"];
$description=$_POST["description"];
$status=$_POST["status"];




// image uploaded using the below code is saved into the news folder of server


 $image_name =$_FILES['image']['name'];//original name of uploaded image
		   $image_type =$_FILES['image']['type'];//type of uploaded image
		  $image_size =$_FILES['image']['size'];//size of uploaded image
		    $image_tmp_name =$_FILES['image']['tmp_name'];//temporary name of uploaded image
			$imagepath="news/";//destination of uploaded image
			$imagepath=$imagepath.basename($_FILES['image']['name']);
  			move_uploaded_file($image_tmp_name,$imagepath);
	


// all details are inserted into news table of database





$q1="insert into news(nid,title,description,image,status)values('".$nid."','".$title."','".$description."','".$image_name."','".$status."')";
mysql_query($q1);
header("Location: UpdateNews.php");
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
