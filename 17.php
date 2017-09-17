<?php
//46.Конструкция switch / case 
//Создать алгоритм вычисления максимального значения двух переменных при помощи switch
$a = 13;
$d = 10;
switch ($a > $d) {    
    case 1: echo '$a > $d '; break;
    case 2: echo '$a < $d '; break;
    
    default: echo 'Sorry man';
}