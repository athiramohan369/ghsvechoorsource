<?php if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:Login.php');
    exit;
}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Govt.HSS, Vechoor</title>


              
			  <!-- The code below is used to include the different style sheets used   -->




<link href="http:
//fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
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
								
									
		

                                           <!-- If user chooses to edit the a news, he is redirected to this form below  -->



									
						<?php
  $nid=$_GET['nid'];
  $title=$_GET['title'];
  //$description=$_GET['description'];
  $status=$_GET['status'];



?>		
									
		

                                           <!-- The details of the news is retrieved from the table news -->



											
<?php

include("connect.php");

$query = "select * from news where nid='$nid' ";
$result=mysql_query($query);
$row = mysql_fetch_array($result);
  
  
  $nid=$row["nid"];
    $title=$row["title"];
		$img=$row['image'];


  $description=$row["description"];
      $status=$row["status"];



 

?>								
						
													
		

                                           <!-- This form edits news details -->



				
		<td align="center"><table width="150" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>
                          <?PHP 
  if($img != '' ){
   echo '<img src="teacher/'.$img.'"  style="width:128px;height:128px">'; }
?>
                        </span></td>
                    </tr>
                      </table></td>						
	
<form name="Editnewsdetails" method="post" action=""  enctype="multipart/form-data">
		
		  <p>&nbsp;</p>
		  <table align="right" width="550" border="2" class="one">
	

					  
					  
				<tr><td><b>Title</b></td><td><input type="text" name="title" size="45" value="<?php echo $title; ?>"/></td></tr>
		

		
		<tr><td><b>Description</b></td><td><input type="text" name="description" size="45" value="<?php echo $description; ?>"></td></tr>
		
			
		
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
				  
					  
					  
					  
					  
					  
					  
					  
					  
					   <td><input type="submit" value="Insert" onClick="alert('Click to submit');" name="submit"/></td>
	          <th><a href="EditNews.php"><font color="#0066FF"><b>Cancel</b></font></a></th></tr>
					
<tr> 
  
</tr>
</table>
		</form>
								
											
		

                                           <!-- News details are updated as shown below  -->



									
	<?php
//session_start();

if(isset($_POST['submit']))
{
$title=$_POST["title"];
$description=$_POST["description"];
$status=$_POST["status"];




$image_name =$_FILES['image']['name'];
		   $image_type =$_FILES['image']['type'];
		  $image_size =$_FILES['image']['size'];
		    $image_tmp_name =$_FILES['image']['tmp_name'];
			$imagepath="news/";
			$imagepath=$imagepath.basename($_FILES['image']['name']);
        if( $image_name==''){
		$image_name=$img;
		}
		else{
	   
	   
	   
		
		move_uploaded_file($image_tmp_name,$imagepath); }






$q="update news set title='$title',description='$description',image='$image_name',status='$status'  where nid='$nid'";
//and set status=$status

//$sql= "update staff set //Tid='$tid',Name='$name',HouseName='$hname',Street='$street',City='$city',State='$state',Pin='$pin',Dob='$dob',Gender='$gender',Doj='$doj',Mobile='$mo//bile',Email='$email',Qualification='$qual',Designation='$desig',Photo='$photo',Status='$status' where Tid='$tid'";




mysql_query($q);
header("Location: EditNews.php");
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
