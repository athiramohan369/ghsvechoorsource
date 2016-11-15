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
function chk()
{
	var a=document.getElementById("name").value;
	if(a=="")
	{
	document.getElementById("nam").innerHTML="field is empty";	
	}
	else
	{
		document.getElementById("nam").innerHTML="";
	}
}







function chk7()
{
	var x=document.getElementById("email").value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
		document.getElementById("eml").innerHTML="Invalid E-mail ID";
	}
	else
	{
		document.getElementById("eml").innerHTML="";
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
				{
                    return true;
			}
					else if(charCode==32) {
					return true; }
					
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

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



</script>



<style type="text/css">
<!--
.style2 {
	color: #0066FF;
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>





<body>



                           <!-- The code below inserts the student details into the student table of school database -->




<?php
//session_start();
include("connect.php");
if(isset($_POST['submit']))
{

$admno=$_POST["admno"];                                           //all inserted details are stored into variables
$name=$_POST["name"];
$Class=$_POST["Class"];
$division=$_POST["division"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$doadm=$_POST["doadm"];
//$photo=$_POST["photo"];
$bloodgroup=$_POST["bloodgroup"];
$hname=$_POST["hname"];  
$street=$_POST["street"];
$city=$_POST["city"];
$state=$_POST["state"];
$pin=$_POST["pin"];
$fathersname=$_POST["fathersname"];
$mothersname=$_POST["mothersname"];
$phone=$_POST["phone"];
$aadharno=$_POST["aadharno"];

$email=$_POST["email"];



// image uploaded using the below code is saved into the student folder of server


 $image_name =$_FILES['image']['name'];//original name of uploaded image
		   $image_type =$_FILES['image']['type'];//type of uploaded image
		  $image_size =$_FILES['image']['size'];//size of uploaded image
		    $image_tmp_name =$_FILES['image']['tmp_name'];//temporary name of uploaded image
			$imagepath="student/student/";//destination of uploaded image
			$imagepath=$imagepath.basename($_FILES['image']['name']);
        if( $image_name==''){
		echo "<script>alert('Please select an image)</script>";
		exit();
		}
		else{
		move_uploaded_file($image_tmp_name,$imagepath);


// all details are inserted into student table of database


$q="insert into student(admno,name,Class,division,gender,dob,doadm,bloodgroup,hname,street,city,state,pin,fathersname,mothersname,phone,aadharno,email,photo)values('".$admno."','".$name."','".$Class."','".$division."','".$gender."','".$dob."','".$doadm."','".$bloodgroup."','".$hname."','".$street."','".$city."','".$state."','".$pin."','".$fathersname."','".$mothersname."','".$phone."','".$aadharno."','".$email."','".$image_name."')";
mysql_query($q);
header("Location: Student.php");
}
}
?>





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
							<p align="right"><a href="Student.php"><strong> Go Back  </strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="Login.php"><strong>Logout</strong></a></p>
							<p class="meta"></p>
							<div class="entry">
								<p>
								
								
								
								
								
								
								
								
					<!-- Form for inserting student details is given below -->
								  
								  
								  <form name="DetailsStudent" method="post" action="DetailsStudent.php" enctype="multipart/form-data">
		<p align="center" class="style2">Enter Student Details		                                       </p>
		<table class="one" align="center" width="450" height="1560" border="2">
		<tr><td></td></tr>
		<tr><td><label><b>Admission No</b></label></td><td><input type="text" name="admno" onKeyPress="return onlyNumbers(event,this);" size="45" required/></td></tr>
		<tr><td><label><b>Name</b></label></td><td><input type="text" name="name" id="name" onBlur="chk();" onKeyPress="return onlyAlphabets(event,this);" size="45" required/></td><td>&nbsp;</td><td width="138"><span id="nam"></span></td></tr>
		
		
	
		
		<tr><td><b>Class</b></td><td><input type="text" name="Class" onKeyPress="return onlyNumbers(event,this);" maxlength="2" size="45" /></td></tr>
		<tr><td><b>Division</b></td><td><input type="text" name="division" onKeyPress="return onlyAlphabets(event,this);" maxlength="1" size="45" /></td></tr>
		
		 
		
		
	<tr><td><b>Gender</b></td><td><input type="radio" required name="gender" id="gender" value="male">
                <label for="gender">Male 
                  <input type="radio" name="gender" id="gender2" value="female">
              Female</label></td></tr> 
		<tr><td><b>Date of Birth</b></td><td><input type="date" name="dob" size="45" /></td></tr>
		<tr><td><b>Date of Admission</b></td><td><input type="date" name="doadm" size="45" /></td></tr>
		
		 <tr><td><b>Photo</b></td><td><input type="file" name="image" size="45" /></td></tr>
		 
		
		 
		      <tr><td><b>Blood Group</b></td><td><input type="text" name="bloodgroup" size="45" /></td></tr>
				<tr><td><b>House Name</b></td><td><input type="text" onKeyPress="return onlyAlphabets(event,this);" name="hname" size="45" /></td></tr>
		<tr><td><b>Street</b></td><td><input type="text" name="street" size="45" /></td></tr>
		<tr><td><b>City</b></td><td><input type="text" name="city" onKeyPress="return onlyAlphabets(event,this);" size="45" /></td></tr>
		<tr><td><b>State</b></td><td><input type="text" name="state" onKeyPress="return onlyAlphabets(event,this);" size="45" /></td></tr>
		<tr><td><b>Pin</b></td><td><input type="text" name="pin" onKeyPress="return onlyNumbers(event,this);" maxlength="6" size="45" /></td></tr>
		<tr>
		  <td><b>Father's Name</b></td>
		  <td><input type="text" name="fathersname" onKeyPress="return onlyAlphabets(event,this);" size="45" /></td></tr>
		<tr>
		  <td><b>Mother's Name</b></td>
		  <td><input type="text" name="mothersname" onKeyPress="return onlyAlphabets(event,this);" size="45" /></td></tr>
		<tr><td><b>Contact No</b></td><td><input type="text" name="phone" onKeyPress="return onlyNumbers(event,this);" maxlength="11" size="45" /></td></tr>
		<tr><td><b>AADHAR No</b></td><td><input type="text" name="aadharno" onKeyPress="return onlyNumbers(event,this);" maxlength="12" size="45" /></td></tr>

		<tr><td height="148"><b>Email</b></td>
		<td><input type="text" name="email" id="email" onBlur="chk7()" size="45" /></td><td>&nbsp;</td><td><span id="eml"></span></td></tr>
		
		

		
		<tr><td height="24"><input type="submit" value="Insert" onClick="alert('Click to submit');" name="submit"/>
		<th><a href="student.php"><font color="#0066FF"><b>Cancel</b></font></a></th></td></tr>
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
