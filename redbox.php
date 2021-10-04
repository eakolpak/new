<?php require_once "class_main.php";

header("Content-type: image/png"); 
$pic = ImageCreateTrueColor(300, 200); //пустой холст
ImageFill($pic, 0, 0, 0xf8f8f8); //Фоновый цвет

	$color = ImageColorAllocate($pic, 255, 0, 0);
	$x1 = 0;
	$y1 = 0;
	$x2 = 300;
	$y2 = 200;
		
	ImageFilledRectangle($pic, $x1, $y1, $x2, $y2, $color); 		    


ImagePNG($pic); 
ImageDestroy($pic); 

?>
