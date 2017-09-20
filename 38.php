
<?php
//71.рекурсивные функции
//определить рекурсивную функцию - аналог функции print_r

//to define a recursive function - analogue of function of print _ r

$br = [
    2,
    5,
    1,
    [3, 1, 7],
    2,
    [4, 6, 8],
    9,
];

function r1($ar) {
    foreach ($ar as $el) {
        if (is_array($el)) {
            r1($el);
        } else {
            echo $el . PHP_EOL;
        }
    }
}

r1($br);