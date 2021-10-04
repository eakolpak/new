<?php 
namespace drawing;

// Класс Drawing
abstract class DrawingClass
{
	abstract function Draw();		
}	

class BoxClass extends DrawingClass
{
	function Draw()
	{
		print "<br>Прямоугольник класса DrawingClass";		
	}
	
}	

class CircleClass extends DrawingClass
{
	function Draw()
	{
		print "<br>Круг класса DrawingClass";		
	}
	
}	

//Домашняя работа
class GreenCircleClass extends DrawingClass
{
	
	private $x1, $y1, $x2, $y2;
	public function __construct($x1, $y1, $x2, $y2)
	{
		$this->x1 = $x1;
		$this->y1 = $y1;
		$this->x2 = $x2;
		$this->y2 = $y2;
		//print "<a href='greencircle.php?a=$x1&b=$y1&c=$x2&d=$y2'>Синий круг</a>";
		print "<img src='greencircle.php?a=$x1&b=$y1&c=$x2&d=$y2'>";
	}

	function Draw ()
	{
	}
}

?>
		
