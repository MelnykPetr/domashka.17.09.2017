
<?php
//Использование var_dump 
$a = false;
$b = true;
$c = null;

// we get:  bool(true) bool(false) NULL NULL + notice
var_dump($a, $b, $c, $some_undefined_var);

echo '<br>';

$a = false;
$b = true;
$c = null;

$arr = array($a, $b, $c, 'some_array' => array(1, 2, 3));

echo '<pre>';
var_dump($arr);
echo '</pre>';
array(4) {
  [0]=>
  bool(false)
  [1]=>
  bool(true)
  [2]=>
  NULL
  ["some_array"]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
  }
}
