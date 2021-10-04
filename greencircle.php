<?php require_once "class_drawing.php";
 
header("Content-type: image/png"); 
$pic = ImageCreateTrueColor(300, 200); //пустой холст
ImageFill($pic, 0, 0, 0xf8f8f8); //Фоновый цвет

	$color = ImageColorAllocate($pic, 0, 255, 0);
	$x1 = 150;
	$y1 = 100;
	$x2 = 200;
	$y2 = 200;

	ImageFilledEllipse($pic, $x1, $y1, $x2, $y2, $color);

ImagePNG($pic); 
ImageDestroy($pic);
 
?>
