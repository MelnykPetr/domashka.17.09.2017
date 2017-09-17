<?php
//2.Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. 
//Запишите ее в переменную $result.


function arraySum($arr(1, 20, 15, 17, 24, 35)) 
{
	$sum = 0;
	foreach ($arr as $elem) {
		$sum += $elem;
	}

	return $sum;
}