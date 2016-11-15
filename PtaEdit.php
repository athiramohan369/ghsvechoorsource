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
</head>



   
	<?php
  $phone=$_GET['phone'];
  
?>

<?php

include("connect.php");

$query = "select * from pta where phone=$phone ";
$result=mysql_query($query);


$row = mysql_fetch_array($result);
		 
 	$name=$row["name"];
	$desig=$row["desig"];
	$phone=$row["phone"];
	$email=$row["email"];
	$hname=$row["hname"];
	$street=$row["street"];
		$city=$row["city"];
$pin=$row["pin"];
	
	
	
	
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
							<p class="meta"></p>
							<div class="entry">
								<p>
								
								<td align="center"><table width="150" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        
                    </tr>
                      </table></td>
								
		<form name="ViewStaff" method="post" action="">
		<p>&nbsp;</p>
		  <table class="one" align="right" width="550" border="2">
		<tr><td width="150" align="left"><span >Name</span></td><td><span class="style6">:</span> <?PHP echo $name; ?></td></tr>

		<tr><td width="150" align="left"><span >Phone</span></td><td><span class="style6">:</span> <?PHP echo $phone; ?></td></tr>
		
</table>
		</form>				
						
						
					
					
					
					
					
					
					
					
					
					<form name="Editptadetails" method="post" action="">
		
		  <p>&nbsp;</p>
		  <table align="right" width="550" border="2" class="one">
	

 
		     <tr><td><b>Designation</b></td><td><input type="text" name="desig" value="<?php echo $desig; ?>" size="45" /></td></tr>

		
		      <tr><td><b>Housename</b></td><td><input type="text" name="hname" value="<?php echo $hname; ?>" onKeyPress="return onlyAlphabets(event,this);" size="45" /></td></tr>
		      <tr><td><b>Street</b></td><td><input type="text" name="street" value="<?php echo $street; ?>" size="45" /></td></tr>
		      <tr><td><b>City</b></td><td><input type="text" name="city" value="<?php echo $city; ?>" onKeyPress="return onlyAlphabets(event,this);" size="45" /></td></tr>
		      
		      <tr><td><b>Pin</b></td><td><input type="text" name="pin" value="<?php echo $pin; ?>" onKeyPress="return onlyNumbers(event,this);" maxlength="6" size="45" /></td></tr>
		      
		      <tr><td><b>Email</b></td><td><input type="text" name="email" value="<?php echo $email; ?>" id="email" onBlur="chk7()"size="45" /></td>  <td>&nbsp; &nbsp;</td><td><span id="eml"></span></td></tr>
		      <tr><td><b>Mobile</b></td><td><input type="text" name="phone" value="<?php echo $phone; ?>" onKeyPress="return onlyNumbers(event,this);" maxlength="10" size="45" required /></td></tr>
					    <tr><td><input type="submit" value="Insert" onClick="alert('Click to submit');" name="submit"/>
	          <th><a href="ViewPta.php"><font color="#0066FF"><b>Cancel</b></font></a></th></td></tr>
					

</table>
		</form>
								
								
	<?php
//session_start();

if(isset($_POST['submit']))
{
	 
	
$desig=$_POST["desig"];
$hname=$_POST["hname"];
$street=$_POST["street"];
$city=$_POST["city"];
$pin=$_POST["pin"];
$phone1=$_POST["phone"];
$email=$_POST["email"];


$q="update pta set desig='$desig', hname='$hname', street='$street', city='$city', pin='$pin',email='$email',phone='$phone1'  where phone='$phone'";
//and set status=$status

//$sql= "update staff set //Tid='$tid',Name='$name',HouseName='$hname',Street='$street',City='$city',State='$state',Pin='$pin',Dob='$dob',Gender='$gender',Doj='$doj',Mobile='$mo//bile',Email='$email',Qualification='$qual',Designation='$desig',Photo='$photo',Status='$status' where Tid='$tid'";




mysql_query($q);
header("Location: ViewPta.php");
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
