<?php
//<p>21. ��������� ��������, ��� �������� �� �������, ������ � ����� �������� ������ ���� 9
�����, � �� 5.<br><br>
//1<br>
//22<br>
//333<br>
//4444<br>
//55555</p>

	for ($i = 1; $i <= 9; $i++) {
		$str = '';
		for ($j = 0; $j < $i; $j++) {
			$str .= $i;
		}
		echo $str.'<br>';
	}
?>