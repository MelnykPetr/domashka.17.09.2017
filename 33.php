
<?php
/*55. Запись в файл
Создать текстовый файл, в котором будет 10 строк. 
В первой строке записать 1, во второй 22, в третьей 33, ..., в десятой - десять десяток
To create a text file there will be 10 lines in that. 
In the first line to write down 1, in the second 22, in the third 33, ..., in tenth are ten ten
*/

$f = fopen('test.txt', 'w');
fwrite($f, '1' . PHP_EOL . '1');
fclose($f);

$f = fopen('test.txt', 'a');
fwrite($f, '2' . PHP_EOL . '22');
fclose($f);

$f = fopen(test.txt', 'b');
fwrite($f, '3' . PHP_EOL . '33');
fclose($f);

$f = fopen(test.txt', 'c');
fwrite($f, '4' . PHP_EOL . '44');
fclose($f);

$f = fopen(test.txt', 'd');
fwrite($f, '5' . PHP_EOL . '55');
fclose($f);

$f = fopen(test.txt', 'e');
fwrite($f, '6' . PHP_EOL . '66');
fclose($f);

$f = fopen(test.txt', 'g');
fwrite($f, '7' . PHP_EOL . '77');
fclose($f);

$f = fopen(test.txt', 'h');
fwrite($f, '8' . PHP_EOL . '88');
fclose($f);

$f = fopen(test.txt', 'k');
fwrite($f, '9' . PHP_EOL . '99');
fclose($f);

$f = fopen(test.txt', 'p');
fwrite($f, '10' . PHP_EOL . '10');
fclose($f);
// check the file