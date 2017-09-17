
<?php
//44. Конструкции условий: if / else / elseif
//Создать алгоритм вычисления максимального значения двух заданных переменных
$x = 125;
$y = 5;

if ($y > $x) {
	$message = "max {$y} ";
} elseif ($y < $x) {
	$message = "min {$y} ";
} else {
	$message = " {$y} not > <";
}

echo $message;