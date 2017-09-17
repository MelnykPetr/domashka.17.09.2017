

<?php
//Создать массив из названий 5 стран мира. Вывести массив на экран при помощи print_r внутри тегов <pre></pre>
$myArray = array(10 => 'Brasilia', 20 => 'Canada',30=>'Poland',40=>'Germany',50=>'Ukraina');
print_r($myArray);

echo '<br>';


echo '<pre>';
print_r($myArray);
echo '</pre>';
?>
Array ( [10] => Brasilia [20] => Canada [30] => Poland [40] => Germany [50] => Ukraina ) 
Array
(
    [10] => Brasilia
    [20] => Canada
    [30] => Poland
    [40] => Germany
    [50] => Ukraina
)