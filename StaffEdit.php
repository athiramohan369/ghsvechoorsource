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
<link href="reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="csstab.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.0.js"></script>
</head>



   
	<?php
  $tid=$_GET['tid'];
  
?>

<?php

include("connect.php");
$query="";
$query = "select * from teacher where tid=$tid ";
$result=mysql_query($query);


$row = mysql_fetch_array($result);
		 
 	$name=$row["name"];
	$qualification=$row["qualification"];
	$doj=$row["doj"];
	$designation=$row["designation"];
	$phone=$row["phone"];
	$email=$row["email"];
		$dob=$row["dob"];

	$img=$row['photo'];
	
	$hname=$row["hname"];
	$street=$row["street"];
		$city=$row["city"];
$pin=$row["pin"];
$state=$row["state"];
	
	
	
	
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
							<p align="right"><a href="ViewStaff.php"><strong> Go Back  </strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="Login.php"><strong>Logout</strong></a></p>
							<p class="meta"></p>
							<div class="entry">
								<p>
								
								<td align="center"><table width="150" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>
                          <?PHP 

   echo '<img src="teacher/'.$img.'"  style="width:128px;height:128px">';
?>
                        </span></td>
                    </tr>
                      </table></td>
								
		<form name="ViewStaff" method="post" action="">
		<p>&nbsp;</p>
		  <table class="one" align="right" width="550" border="2">
		<tr><td width="150" align="left"><span class="style10">Staff ID</span></td><td><span class="style6">:</span> <?PHP echo $tid; ?></td></tr>

		<tr><td width="150" align="left"><span class="style10">Name</span></td><td><span class="style6">:</span> <?PHP echo $name; ?></td></tr>
		
</table>
		</form>				
						
						
					
					
					
					
					
					
					
					
					
					<form name="Editstaffdetails" method="post" action="" enctype="multipart/form-data">
		
		  <p>&nbsp;</p>
		  <table align="right" width="550" border="2" class="one">
	

 
		      <tr><td><b>Housename</b></td><td><input type="text" name="hname" onKeyPress="return onlyAlphabets(event,this);" size="45" value="<?php echo $hname; ?>"/></td></tr>
		      <tr><td><b>Street</b></td><td><input type="text" name="street" size="45" value="<?php echo $street; ?>" /></td></tr>
		      <tr><td><b>City</b></td><td><input type="text" name="city" onKeyPress="return onlyAlphabets(event,this);" size="45" value="<?php echo $city; ?>" /></td></tr>
		      <tr><td><b>State</b></td><td><input type="text" name="state" onKeyPress="return onlyAlphabets(event,this);" size="45" value="<?php echo $state; ?>" /></td></tr>
		      <tr><td><b>Pin</b></td><td><input type="text" name="pin" onKeyPress="return onlyNumbers(event,this);" maxlength="6" size="45" value="<?php echo $pin; ?>" /></td></tr>
		      <tr><td><b>Date of Birth</b></td><td><input type="date" name="dob" size="45" value="<?php echo $dob; ?>" /></td></tr>
		      <tr><td><b>Date of Joining</b></td><td><input type="date" name="doj" size="45" value="<?php echo $doj; ?>" /></td></tr>
		      
		    
		      <tr><td><b>Email</b></td><td><input type="text" name="email" id="email" onBlur="chk7()"size="45" value="<?php echo $email; ?>"  /></td>  <td>&nbsp; &nbsp;</td><td><span id="eml"></span></td></tr>
			  <tr><td><b>Mobile</b></td><td><input type="text" name="phone" onKeyPress="return onlyNumbers(event,this);" maxlength="11" size="45" value="<?php echo $phone; ?>"  /></td></tr>
		     <tr><td><b>Qualification</b></td><td><input type="text" name="qualification" size="45" value="<?php echo $qualification; ?>"  /></td></tr>
		      <tr><td><b>Designation</b></td><td><input type="text" name="designation" size="45" value="<?php echo $designation; ?>"  /></td></tr>
			  
			  		      <tr><td><b>Photo</b></td><td><input type="file" name="image"  /></td></tr>

			  
			  
		   <tr><td><b>Status</b></td><td><label>
                        <select name="status" >
                          <option value="Active" selected="selected">Active</option>
                          <option value="Retired" >Retired</option>
                          <option value="Transfered">Transfered</option>
                        </select>
                      </label></td></tr>
					    <tr><td><input type="submit" value="Insert" onClick="alert('Click to submit');" name="submit"/>
	          <th><a href="ViewStaff.php"><font color="#0066FF"><b>Cancel</b></font></a></th></td></tr>
					

</table>
		</form>
								
								
	<?php
//session_start();

if(isset($_POST['submit']))
{
$hname=$_POST["hname"];
$street=$_POST["street"];
$city=$_POST["city"];
$state=$_POST["state"];
$pin=$_POST["pin"];
$dob=$_POST["dob"];
$doj=$_POST["doj"];
$phone=$_POST["phone"];
$qualification=$_POST["qualification"];
$email=$_POST["email"];

$designation=$_POST["designation"];
$status=$_POST["status"];




$image_name =$_FILES['image']['name'];
		   $image_type =$_FILES['image']['type'];
		  $image_size =$_FILES['image']['size'];
		    $image_tmp_name =$_FILES['image']['tmp_name'];
			$imagepath="teacher/";
			$imagepath=$imagepath.basename($_FILES['image']['name']);
        if( $image_name==''){
		$image_name=$img;
		}
		else{
	   
	   
	   
		
		move_uploaded_file($image_tmp_name,$imagepath); }



$q="update teacher set hname='$hname',street='$street',city='$city',state='$state',pin='$pin',dob='$dob',doj='$doj',email='$email',phone='$phone',qualification='$qualification',designation='$designation',photo='$image_name',status='$status'  where tid='$tid'";
//and set status=$status

//$sql= "update staff set //Tid='$tid',Name='$name',HouseName='$hname',Street='$street',City='$city',State='$state',Pin='$pin',Dob='$dob',Gender='$gender',Doj='$doj',Mobile='$mo//bile',Email='$email',Qualification='$qual',Designation='$desig',Photo='$photo',Status='$status' where Tid='$tid'";




mysql_query($q);
header("Location: ViewStaff.php");
}
?>
					
					
					
					
					
					
					
					
					
					
					
					
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
								
								
								
								
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
	<p>Copyright (c) 2012 Sitename.com. All rights reserved. Design by RIT, Pampady.</p>
</div>
<!-- end #footer -->
</body>
</html>
