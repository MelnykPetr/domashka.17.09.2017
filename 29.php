<?php
//<p>13. ������� ������� ��������</p>
$rows = 10; // ���������� �����, tr
$cols = 10; // ���������� ��������, td

$table = '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        if ($tr===1 or $td===1){
            $table .= '<th style="color:white;background-color:green;">'. $tr*$td .'</th>'; // ��������� ������ ������ ��� �������
        }else{
            $table .= '<td>'. $tr*$td .'</td>'; // ��� ������, ����� ����� �� ������� ������� � ������ ������
        }
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table; // ������� ��� ����� 1 ���

?>