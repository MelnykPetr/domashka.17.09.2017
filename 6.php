
<?php
//24.������ 
$a = 4;
$b = 'Hello';
$x = & $y;

$x = 21;
echo $y; // 21

$y++;
echo $x; //22
?>
2122