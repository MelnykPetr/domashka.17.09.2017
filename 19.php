
<?php
//48. ����� while / do-while 
//������� �������� ����������� ���� ������� ����� � ���������� �� 1 �� 100 ��� ������ while. ������� ����� - ��� ����� ������� ������� ������ �� ���� � �� 1
$x %1== 0;
do {
     echo $x;
} while ($x++<100);
?>
49.���� foreach 
������� ������ �� 10 ����� �������� ��������. ��� ������ foreach ������� �� ����� �� ��������, ������� ������� �� 3
<?php
$ar = [1,3,42,7,9,137,0,2,6, 5,];
foreach ($ar as $i) {
    if ($i % 3 == 0) {
      echo $i . '/3 <br>';
    } else {
        echo $i . ' not /3 <br>';
    }
}
?>