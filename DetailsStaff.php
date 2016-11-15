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
.style1 {
	color: #0066FF;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>
</head>





<body>


<!-- The code below inserts the teacher details into the teacher table of school database -->




<?php
//session_start();
include("connect.php");
$query = "select * from teacher";

$result=mysql_query($query);
$i = 1;
while($row = mysql_fetch_array($result))
  {
  $i++;                         //this code is used to automatically generate the teacher id value
  }
$i=$i+100;

if(isset($_POST['submit']))
{

$tid1=$i;
$name1=$_POST["name"];                                          //all inserted details are stored into variables
$hname1=$_POST["hname"];
$street1=$_POST["street"];
$city1=$_POST["city"];
$state1=$_POST["state"];
$pin1=$_POST["pin"];
$dob1=$_POST["dob"];
$doj1=$_POST["doj"];
$email1=$_POST["email"];
$phone1=$_POST["phone"];
$qualification1=$_POST["qualification"];
$designation1=$_POST["designation"];
//$photo1=$_POST["photo"];
$status1=$_POST["status"];



// image uploaded using the below code is saved into the teacher folder of server


 $image_name =$_FILES['image']['name'];  //original name of uploaded image
		   $image_type =$_FILES['image']['type']; //type of uploaded image
		  $image_size =$_FILES['image']['size']; //size of uploaded image
		    $image_tmp_name =$_FILES['image']['tmp_name']; //temporary name of uploaded image
			$imagepath="teacher/"; //destination of uploaded image
			$imagepath=$imagepath.basename($_FILES['image']['name']);
        if( $image_name==''){
				$image_name='';

		}
		else{
		move_uploaded_file($image_tmp_name,$imagepath);
}


// all details are inserted into teacher table of database

$q="insert into teacher(tid,name,hname,street,city,state,pin,dob,doj,email,phone,qualification,designation,photo,status)values('".$tid1."','".$name1."','".$hname1."','".$street1."','".$city1."','".$state1."','".$pin1."','".$dob1."','".$doj1."','".$email1."','".$phone1."','".$qualification1."','".$designation1."','".$image_name."','".$status1."')";
mysql_query($q);
header("Location: DetailsStaff.php");

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
							<p align="right"><a href="TeacherView.php"><strong> Go Back  </strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="Login.php"><strong>Logout</strong></a></p>
							<p class="meta"></p>
							<div class="entry">
								<p>
								
								
								
								
								
								
								
						<!-- Form for inserting teacher details is given below -->


							
								  
  
								  <form name="DetailsStaff" method="post" action="DetailsStaff.php" enctype="multipart/form-data">
		                                       <p align="center" class="style1">Type in the details...	    </p>
		                                       <div align="left"></div>
		  <div align="left">
		    <table class="one" align="center" width="450" height="1225" border="2">
		      <tr>
		        <td>&nbsp;</td>
		      </tr>
			   
			  

			  
		      <tr><td><b>Name</b></td><td><input type="text" name="name" id="name" onBlur="chk();" onKeyPress="return onlyAlphabets(event,this);"  size="45" required/></td><td>&nbsp; &nbsp;</td><td width="138"> <span id="nam"></span></td>
			  </tr>
		      <tr><td><b>Housename</b></td><td><input type="text" name="hname" onKeyPress="return onlyAlphabets(event,this);" size="45" /></td></tr>
		      <tr><td><b>Street</b></td><td><input type="text" name="street" size="45" /></td></tr>
		      <tr><td><b>City</b></td><td><input type="text" name="city" onKeyPress="return onlyAlphabets(event,this);" size="45" /></td></tr>
		      <tr><td><b>State</b></td><td><input type="text" name="state" onKeyPress="return onlyAlphabets(event,this);" size="45" /></td></tr>
		      <tr><td><b>Pin</b></td><td><input type="text" name="pin" onKeyPress="return onlyNumbers(event,this);" maxlength="6" size="45" /></td></tr>
		      <tr><td><b>Date of Birth</b></td><td><input type="date" name="dob" size="45" /></td></tr>
		      <tr><td><b>Date of Joining</b></td><td><input type="date" name="doj" size="45" /></td></tr>
		      <tr><td><b>Email</b></td><td><input type="text" name="email" id="email" onBlur="chk7()"size="45" /></td>  <td>&nbsp; &nbsp;</td><td><span id="eml"></span></td></tr>
		      <tr><td><b>Mobile</b></td><td><input type="text" name="phone" onKeyPress="return onlyNumbers(event,this);" maxlength="11" size="45" required /></td></tr>
		      <tr><td><b>Qualification</b></td><td><input type="text" name="qualification" size="45" /></td></tr>
		      <tr><td><b>Designation</b></td><td><input type="text" name="designation" size="45" /></td></tr>
		      <tr><td><b>Photo</b></td><td><input type="file" name="image" size="45" /></td></tr>
			  
			  

			  
		   <tr><td><b>Status</b></td><td><label>
                        <select name="status" >
                          <option value="Active" selected="selected">Active</option>
                          <option value="Retired" >Retired</option>
                          <option value="Transfered">Transfered</option>
                        </select>
                      </label></td></tr>
					  
					  
			 					
			  
			  
		      <tr><td><input type="submit" value="Insert" onClick="alert('Click to submit');" name="submit"/>
	          <th><a href="TeacherView.php"><font color="#0066FF"><b>Cancel</b></font></a></th></td></tr>
            </table>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
		  </div>
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
