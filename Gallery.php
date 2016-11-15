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
<link href="images.css" rel="stylesheet" type="text/css" media="screen" />




<!-- The code below is used to include the different scripts used   -->






        <script type="text/javascript" src="calendar.js"></script>

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
.style2 {
	color: #FF3366;
	font-size: 36px;
}
.style3 {font-weight: bold}
.style4 {font-weight: bold}
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
						
					</div>
					<div id="content">
						<div class="post">
							<h2 class="title"><a href="#"> </a></h2>
							<p class="meta"></p>
							<div class="entry">
								<p>
								
								
								
								
								
								
								
								
								<p>&nbsp;</p>
				         <p align="center"><span class="style1 style2">Our Albums</span>
                         </h2>
			                                    </p>
					
						
						
		<!-- The album of photos are shown below   -->
				
						
						
							         
		

							
	

<?php

include("connect.php");
 $query="SELECT DISTINCT albumname FROM gallery";   // The distinct album names are retrieved from the gallery table of database

	   $result=mysql_query($query);

	  

while($row = mysql_fetch_array($result))
{
		 
	$albumname=$row["albumname"];   // Each album name is taken from the gallery table of database

	

?>

<!-- Now echo the desired grid -->
<div class="img-grid">
    <ul><li>  
	<img  src="Album.jpg"   style="width:168px;height:158px">
	<?PHP 
	
	   // The distinct album names are given as links to show the photos in that album

			  echo "<b><a href='ViewAlbums.php?albumname=$albumname'>".$row['albumname']. " </a></b><br>";



     
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
								<h2>Calendar</h2>
								<p>
								
								<script type="text/javascript">
            calendar();
        </script>
								
								
								</p>
							</li>
							<li>
								<h2>Important Links</h2>
								<ul class="style4">
								   <li><a href="http://www.education.kerala.gov.in/" target="_blank">General Education Department</a></li>

									<li><a href="http://www.hsslive.in/" target="_blank">HSS Live</a></li>
									<li><a href="https://www.itschool.gov.in/" target="_blank">IT@School</a></li>
									<li><a href="http://sampoorna.itschool.gov.in/" target="_blank">Sampoorna</a></li>
								</ul>
							</li>
							<li>
								<h2>connect with us  at </h2>
								<ul class="style3">
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
