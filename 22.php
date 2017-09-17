<?php//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.

$ar = ['html','css','php','js','jq',];

echo '<p>Old values:</p><pre>' . var_export($ar, 1) . '</pre>';

foreach ($ar as &$item) {
    $item = 1;
    // echo '$item: ' . var_export($item, 1) . '<br>';
}

echo '<p>New values:</p><pre>' . var_export($ar, 1) . '</pre>';