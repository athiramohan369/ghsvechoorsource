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
							<p class="meta"></p>
							<div class="entry">
								<p>
								
								
								

<!-- The details of the selected Principal is retreived from principal table of school database as shown below   -->




									
						<?php
  $name=$_GET['name'];
  $email=$_GET['email'];
?>		
								
<?php

include("connect.php");

$query = "select * from principal where email='$email' ";
$result=mysql_query($query);
$row = mysql_fetch_array($result);
  
    
	
$hname=$row["hname"];
$street=$row["street"];
$city=$row["city"];
$state=$row["state"];
$pin=$row["pin"];
$dob=$row["dob"];
$doj=$row["doj"];
$phone=$row["phone"];
$qualification=$row["qualification"];
$designation=$row["designation"];
$img=$row["photo"];
$status=$row["status"];


 

?>								
					

                                                 <!-- The below form is used to edit Principal details   -->




						
								<form name="ViewStaff" method="post" action="" >
		
		  <p>&nbsp;</p>
		  <table align="right" width="550" border="2" class="one">
		  	<tr>
<td><?PHP 

   echo '<img src="teacher/'.$img.'"  style="width:128px;height:128px">';
?></td></tr>
		<tr><td><span class="style2">Name :</span></td><td><?php echo $name; ?></td></tr>
		<tr><td><span class="style2">Email-id :</span></td><td><?php echo $email; ?></td></tr>
		<td>&nbsp;</td></tr>
</table>
		</form>
								
	
<form name="Editdetails" method="post" action="" enctype="multipart/form-data">
		
		  <p>&nbsp;</p>
		  <table align="right" width="550" border="2" class="one">
	

 
		      <tr><td><b>Housename</b></td><td><input type="text" name="hname" onKeyPress="return onlyAlphabets(event,this);" size="45" value="<?php echo $hname; ?>"/></td></tr>
		      <tr><td><b>Street</b></td><td><input type="text" name="street" size="45" value="<?php echo $street; ?>" /></td></tr>
		      <tr><td><b>City</b></td><td><input type="text" name="city" onKeyPress="return onlyAlphabets(event,this);" size="45" value="<?php echo $city; ?>" /></td></tr>
		      <tr><td><b>State</b></td><td><input type="text" name="state" onKeyPress="return onlyAlphabets(event,this);" size="45" value="<?php echo $state; ?>" /></td></tr>
		      <tr><td><b>Pin</b></td><td><input type="text" name="pin" onKeyPress="return onlyNumbers(event,this);" maxlength="6" size="45" value="<?php echo $pin; ?>" /></td></tr>
		      <tr><td><b>Date of Birth</b></td><td><input type="date" name="dob" size="45" value="<?php echo $dob; ?>" /></td></tr>
		      <tr><td><b>Date of Joining</b></td><td><input type="date" name="doj" size="45" value="<?php echo $doj; ?>" /></td></tr>
		      <tr><td><b>Mobile</b></td><td><input type="text" name="phone" onKeyPress="return onlyNumbers(event,this);" maxlength="10" size="45" required value="<?php echo $phone; ?>" /></td></tr>
		      <tr><td><b>Qualification</b></td><td><input type="text" name="qualification" size="45" value="<?php echo $qualification; ?>" /></td></tr>
		     
	
  <tr><td><b>Designation</b></td><td><label>
                        <select name="designation" >
						<option value="Head Master" selected="selected">Head Master</option>
                          <option value="In-Charge" >In-Charge</option>
                        </select>
                      </label></td></tr>
			 
			 
			 
			  <tr><td><b>Photo</b></td><td><input type="file" name="image" size="45" /></td></tr>

			  
			  
			  
			  
		   <tr><td><b>Status</b></td><td><label>
                        <select name="status" >
                          <option value="Active" selected="selected">Active</option>
						 <option value="Inactive" >Inactive</option>
                          <option value="Retired" >Retired</option>
                          <option value="Transfered">Transfered</option>
                        </select>
                      </label></td></tr>
					  <tr> <td><input type="submit" value="Delete" onclick="alert('Click to delete');" name="delete"/></td>
					   <td><input type="submit" value="Insert" onClick="alert('Click to submit');" name="submit"/></td>
	          <th><a href="EditAdmin.php"><font color="#0066FF"><b>Cancel</b></font></a></th></tr>
					
<tr> 
  
</tr>
</table>
		</form>
								
		

                              <!-- If user chooses to edit the details, it is done as follows  -->



						
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





$q="update principal set hname='$hname',street='$street',city='$city',state='$state',pin='$pin',dob='$dob',doj='$doj',phone='$phone',qualification='$qualification',designation='$designation',photo='$image_name',status='$status'  where email='$email'";   
//and set status=$status

//$sql= "update staff set //Tid='$tid',Name='$name',HouseName='$hname',Street='$street',City='$city',State='$state',Pin='$pin',Dob='$dob',Gender='$gender',Doj='$doj',Mobile='$mo//bile',Email='$email',Qualification='$qual',Designation='$desig',Photo='$photo',Status='$status' where Tid='$tid'";




mysql_query($q);
header("Location: EditAdmin.php");
}
?>
		
		
	
		

                                  <!-- If user chooses to delete the details, it is done as follows  -->


										
								
	<?php

if(isset($_POST['delete']))
{
$q = "delete FROM principal where name='$name' and email='$email'";





mysql_query($q);
header("Location: EditAdmin.php");
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
	<p>Copyright (c) 2016 . All rights reserved. Maintained by RIT, Pampady.</p>
</div>
<!-- end #footer -->
</body>
</html>
