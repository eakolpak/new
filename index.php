<!DOCTYPE html>
<html lang="ru">
<?php require_once "class_main.php"; require_once "model\class_drawing.php"; ?>
<!--
	5.3 Иерархия классов
-->
	<head>
		<meta charset="utf-8">
		<title>Пример b53</title>
	</head>
	<body>

		<h1>1. Обычный класс Main</h1>
		<?php
			use main\Boxclass;

			// Обращение в пространстве имен main		
			$box = new BoxClass();
			$box->Draw();   

			// Полное обращение к имени класса
			$circle = new main\CircleClass();
			$circle->Draw();   
		?>

		<h1>2. Абстрактный класс DrawingClass</h1>
		<?php
			use drawing\CircleClass;

			//$drawing = new drawing\DrawingClass(); // !!!Нельзя создать экземпляр абстрактного класса
			
			$box = new drawing\BoxClass();
			$box->Draw();   
			
			$circle = new CircleClass();
			$circle->Draw();   
		?>
		
	</body>
</html>
