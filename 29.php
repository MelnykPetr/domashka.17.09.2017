<?php
//<p>13. ¬ывести таблицу умножени¤</p>
$rows = 10; // количество строк, tr
$cols = 10; // количество столбцов, td

$table = '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        if ($tr===1 or $td===1){
            $table .= '<th style="color:white;background-color:green;">'. $tr*$td .'</th>'; // вычислили первую строку или столбец
        }else{
            $table .= '<td>'. $tr*$td .'</td>'; // все ¤чейки, кроме ¤чеек из первого столбца и первой строки
        }
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table; // сделали эхо всего 1 раз

?>