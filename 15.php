
<?php
//44. ����������� �������: if / else / elseif
//������� �������� ���������� ������������� �������� ���� �������� ����������
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