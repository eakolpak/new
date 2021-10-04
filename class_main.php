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
		public function __construct(int $discount=15) 
	{
       $this->discount = $discount;
       parent::__construct(); 
       print '<br>Конструктор класса ' . __CLASS__;
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
