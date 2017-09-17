
<?php
//24.Приведение типов (скалярные типы)
echo 'To boolean <br>'; 

$a = 0;
$b = -15;
$c = 23.5;

// false, true, true
var_dump( (bool)$a, (bool)$b, (bool)$c );

echo '<br>';

$a = 'hello';
$b = '0';
$c = '';

// true, false, false
var_dump( (bool)$a, (bool)$b, (bool)$c );


echo '<br>To numbers <br>';

$a = false;
$b = 3.654;
$c = '-2 items';
$d = ' 0.5kg';
$e = 'Added 10 points ';

// 0, 3, -2, 0.5, 0
var_dump( (int)$a, (int)$b, (int)$c, (float)$d, (float)$e );

echo '<br>To strings <br>';

To boolean 
bool(false) bool(true) bool(true) 
bool(true) bool(false) bool(false) 
To numbers 
int(0) int(3) int(-2) float(0.5) float(0) 
To strings 
