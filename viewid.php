
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<!-- The code below facilitates on click download of generated student ID cards   -->



		<a download="IDback.png" href="idcard/back.png" title="ImageName">
		    	<img src="idcard/back.png" />

</a>

<?php
require_once("connect.php");


if(isset($_POST['btsubmit']))
{
	
	$Class= mysql_real_escape_string($_POST['Class']);
		$division= mysql_real_escape_string($_POST['division']); 


}

       $sq="SELECT * FROM student where Class='".$Class."'   and division='".$division."'";
	   
	   $rc=mysql_query($sq);
	   $i = 1;
?>
<div style="width:90%; margin:0 auto; padding:0; display:inline;">
<?php
	  while($row=mysql_fetch_array($rc))
	  {
		$admno=$row["admno"];
		$name=$row["name"];
		$Class=$row["Class"];
		$division=$row["division"];
		$street=$row["street"];
		$hname=$row["hname"];
		$fathersname=$row["fathersname"];
		$phone=$row["phone"];
		$aadharno=$row["aadharno"];
		
		
		
		
		
		
				$photo=$row["photo"];
				
				
		$photo_to_paste = "student/student/".$photo;
		$white_image = "idcard/incardbackground.png";
		
		$im = imagecreatefrompng($white_image);
		$im2 = imagecreatefrompng($photo_to_paste);
		
		//		imagescale($im2, 59,60);

		
		
		// Place "photo_to_paste.png" on "white_image.png"
		imagecopy($im, $im2, 45, 130, 0, 0, imagesx($im2), imagesy($im2));
		
		// Save output image.
		imagepng($im, "idcard/idcard".$i.".png", 1);
		
$originalImage = "idcard/idcard".$i.".png";
if(file_exists($originalImage)) {
	$im = imagecreatefrompng($originalImage);
	imagesavealpha($im, true); // important to keep the png's transparency 
	if(!$im) {
		die("im is null");
	}
	$black = imagecolorallocate($im, 0, 0, 0);
	$red = imagecolorallocate($im, 225, 0, 0);
$text='Address:';
$phn='Phone  :';

	$font = 8; // font size
	$fon=4;

	$outputImage = "idcard/idcard".$i.".png";
	imagestring($im, $font, 70, 250, $name, $red);
		imagestring($im, $fon, 12, 275, $text, $black);

	imagestring($im, $font, 80, 275, $fathersname, $black);
	imagestring($im, $font, 73, 290, $hname, $black);
	imagestring($im, $font, 72, 305, $street, $black);
			imagestring($im, $fon, 12, 330, $phn, $black);

	imagestring($im, $font, 80, 330, $phone, $black);
	
	

	imagepng($im, $outputImage, 0);
	imagedestroy($im);
}
?>

	<div style="padding:0; display:inline-block; width:213px; height:335px; float:left; margin:5px;">
		<a download="IDcard.png" href="idcard/idcard<?php echo $i ?>.png" title="ImageName">
		    	<img src="idcard/idcard<?php echo $i ?>.png" />

</a>
    </div>

	  <?php
	  $i = $i + 1;
	  }
	  ?>
</div>
	   
 

</body>
</html>