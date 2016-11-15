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

<script type="text/javascript">

function onlyNumbers(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if (charCode >= 48 && charCode <= 57) 
                   return true; 
				
					
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }		
		
		
		
		
 function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                   { return true; }
					
					
					else if(charCode==32) {
					return true; }
					
					
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
		
		
				
		
		


</script>


<style type="text/css">
<!--
.style1 {color: #0066FF}
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
														<p align="right"><a href="UpGal.php"><strong> Go Back  </strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="Login.php"><strong>Logout</strong></a></p>

							<p class="meta"></p>
							<div class="entry">
								<p>
								
								
								
								
								
				



<!-- The code below inserts the album details into the gallery table of school database -->


				
								
								
						      <p>
				           
<?php
session_start();
include("connect.php");
if(isset($_POST['submit']))
{

$albumname=$_POST["albumname"];                                     //all inserted details are stored into variables
$description=$_POST["description"];



 $image_name =$_FILES['image']['name'];//original name of uploaded image
		   $image_type =$_FILES['image']['type'];//type name of uploaded image
		  $image_size =$_FILES['image']['size'];//size name of uploaded image
		    $image_tmp_name =$_FILES['image']['tmp_name'];//temporary name of uploaded image
			$imagepath="gallery/";//destination of uploaded image
			$imagepath=$imagepath.basename($_FILES['image']['name']);
        if( $image_name==''){
		echo "<script>alert('Please select an image)</script>";
		exit();
		}
		else{
		move_uploaded_file($image_tmp_name,$imagepath);
					
}





// all details are inserted into gallery table of database






$q1="insert into gallery(albumname,description,image)values('".$albumname."','".$description."','".$image_name."')";
mysql_query($q1);
header("Location: UpGallery.php");
}
?>





								  <?php 
	
include("connect.php");
       $sq="SELECT DISTINCT albumname FROM gallery";  //select distinct album names from gallery table

	   $rc=mysql_query($sq);
	   		?>




 </p>



                                <!-- The below form inserts photos to selected album-->





				          <p>
				          <h2  align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1">Update Gallery </span></h2>
				          <form name="Gallery" method="post" action="UpGallery.php" enctype="multipart/form-data">
		
		<table class="one" align="center" width="450" border="2">
		
		 <tr>
    <td><span class="style2">
      <label><span class="style7">Select Album Name : </span></label>
    </span></td>
    <td>
		<select name="albumname">
		<?php
		while ($cs=mysql_fetch_assoc($rc)){
		$val=$cs[albumname];
		?>
		<option value="<?php print $val;?>"><?php print $val;?></option>
		<?php }?>
		</select></td>
	
	
  </tr>
 
				<tr><td><b>Photo</b></td><td><input type="file" name="image"  /></td></tr>

		
				<tr><td><b>Description</b></td><td><textarea name="description" size="45"></textarea></td></tr>

		
		    <p>&nbsp; </p>
		<tr><td><input type="submit" value="Update" onClick="alert('Click to submit');" name="submit"/>
		<th><a href="UpGal.php"><font color="#0066FF"><b>Cancel</b></font></a></th></td></tr>
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
