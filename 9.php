
<?php
//29. Использование isset
$a = 'Hello';  // defined
$b = 5; // defined
$c = null;  // null

var_dump(isset($a)); // bool(true)
var_dump(isset($b)); // bool(true)
var_dump(isset($c)); // bool(false)

var_dump(isset($some_undefined_var)); // bool(false)
?>
30.Удаление переменной при помощи unset
<?php
$a = 256; // just some variable
$fruits= array('apples' => 5, 'bananas' => 10, 'oranges' => 3);

unset($a); // now $a is null
unset($fruits['bananas']); // now we don't have any babanas in array
print_r($fruits);
?>Array ( [apples] => 5 [oranges] => 3 )