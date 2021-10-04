<?php
namespace main;

class BoxClass 
{
	public function Draw()
	{
		print "<br>Прямоугольник";		
	}
	
}	

class CircleClass 
{
	function Draw()
	{
		print "<br>Круг";		
	}
	
}	
//Домашняя работа
class RedBoxClass extends BoxClass 
{
	private $x1, $y1, $x2, $y2;
	public function __construct($x1, $y1, $x2, $y2)
	{
		$this->x1 = $x1;
		$this->y1 = $y1;
		$this->x2 = $x2;
		$this->y2 = $y2;
		print "<img src='redbox.php?a=$x1&b=$y1&c=$x2&d=$y2'>";
	}

	function Draw ()
	{	
	}
}

// Базовый класс
class MainClass
{
	public $text; // открытое свойство класса
	private $price; // закрытое свойство класса
	
	// Открытый метод класса
	public function OutText()
	{
		print $this->text;		
	}		
	
	public function __construct() 
	{
       $this->text = "Распродажа";
       print '<br>Конструктор класса ' . __CLASS__;
	}

	public function __destruct()
	{ 
       print '<br>Деструктор класса ' . __CLASS__;
	}	

	// Сеттер
	public function SetPrice($price)
	{
		$this->price = $price;		
	}

	// Геттер
	public function GetPrice()
	{
		return $this->price;		
	}


}

class ChildClass extends MainClass
{
	private $discount; // закрытое свойство класса
	
	// Полиморфизм
	public function OutText()
	{
		print "<p style=color:red>" . $this->text . "</p>";
	}		
	
	public function __construct() 
	{
       parent::__construct(); // Вызов родительского конструктора
       print '<br>Конструктор класса ' . __CLASS__;
	}

	public function __destruct()
	{ 
       print '<br>Деструктор класса ' . __CLASS__;
	}	
}

?>
