<?php 

header("Content-type: image/png"); 
$pic = ImageCreateTrueColor(200, 200); //пустой холст
ImageFill($pic, 0, 0, 0xffffff); //Фоновый цвет

	$color = ImageColorAllocate($pic, 255, 0, 0);
	$x1 = $_GET['a'];
	$y1 = $_GET['b'];
	$x2 = $_GET['c'];
	$y2 = $_GET['d'];
		
	ImageFilledRectangle($pic, $x1, $y1, $x2, $y2, $color); 		    

ImagePNG($pic); 
ImageDestroy($pic); 

?>
