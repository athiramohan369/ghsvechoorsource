
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
<link href="images.css" rel="stylesheet" type="text/css" media="screen" />


<!-- The code below is used to include the different scripts used   -->



<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.0.js"></script>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	color: #0066FF;
	font-weight: bold;
}
-->
</style>










<link href="onclk.css" rel="stylesheet" type="text/css" media="screen" />



<style type="text/css">
<!--
.style3 {
	color: #FF3399;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>
</head>


	

<?php

  $albumname=$_GET['albumname'];  // variable is initiated with the album name
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
								<li><a href="index.php">Home Page</a></li>
								<li><a href="AboutUs.php" >About Us</a></li>
								<li><a href="Facilities.php" >Facilities</a></li>
								<li class="current_page_item"><a href="Gallery.php" >Gallery</a></li>
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
								
								<p align="center"><span class="style3"><?php echo $albumname; ?></span>
                         </h2>
                              </p>
				         
								
								
	

<!-- The code below is used to get the photos of belonging to the selected album name   -->





<?php


include("connect.php");

$query = "select image from gallery where albumname='$albumname' and image IS NOT NULL  "; // photo is retrieved
$result=mysql_query($query);
$rowdes = mysql_fetch_array($result);



 
while($row = mysql_fetch_array($result))
{
  
	
	$image=$row["image"]; 
	

?>

                         <!-- Now echo the desired grid -->
<div class="img-grid">
    <ul><li>  
	 <?PHP 

   echo '<img class="fancybox" src="gallery/'.$image.'"  style="width:208px;height:228px">'; // The image is shown from its directory
                                                                                             //  using its name in the database
?>
</li></ul>
</div>
								
	
	<?PHP }	?>						
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								</p>
							</div>
						</div>
						
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
								<h2>connect with us  at </h2>
								<ul>
									<li><a href="http://ghsvechoor.blogspot.in/2012/02/blog-post.html" target="_blank">Our Blog</a></li>

									<li><a href="https://www.facebook.com/ghsvechoor" target="_blank">Facebook</a></li>
									
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





				
					
               <!-- The following script facilitates sliding the images one after another   -->
					
					






<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="jquery.fancybox-1.3.4.pack.min.js"></script>
<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
</script>
</body>
</html>
