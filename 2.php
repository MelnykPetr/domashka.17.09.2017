<?php

������� ������������� ������ �� 5 ���������, � ������� ����� - ��� �������� �����, � �������� ��������� - ��� ������� �����. ������� ������ �� �����




<?php
//������� ����������� ������, ������� ������������ ������ �������. ������ ����� - ��� ����� (�������������� ����������). ������ ����� ����� �����, ������, �������� � ����. � ������ ������� ������ ���� �� ����� 3 ����.
$style = array('roman' => 1, 'tragedia' => 2, 'love' => 3);
$autor = array('Bulgakov' => 6, 'Tolstoy' => 3,'Donchova'=>9);
$name_price = array('Master and Margarita'=>2,'War and Peace'=>10,'Agent 013'=>4);
$general = array($style, $autor,$name_price);

// output
echo '<pre>';
print_r($general);
Array
(
    [0] => Array
        (
            [roman] => 1
            [tragedia] => 2
            [love] => 3
        )

    [1] => Array
        (
            [Bulgakov] => 6
            [Tolstoy] => 3
            [Donchova] => 9
        )

    [2] => Array
        (
            [Master and Margarita] => 2
            [War and Peace] => 10
            [Agent 013] => 4
        )

)