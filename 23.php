<?php
//2.��� ������ � ���������� 1, 20, 15, 17, 24, 35. � ������� ����� foreach ������� ����� ��������� ����� �������. 
//�������� �� � ���������� $result.


function arraySum($arr(1, 20, 15, 17, 24, 35)) 
{
	$sum = 0;
	foreach ($arr as $elem) {
		$sum += $elem;
	}

	return $sum;
}