<?php
require('../configuration.php');
require('../functions/taskTwo.php'); //X function
require('../functions/taskThree.php'); //Y function

//4. Вывод на экран результатов выполнения функций X и Y для всех дочерних массивов из задачи номер один.

echo "<b>вывод результатов выполнения функции Y для всех дочерних массивов из задачи номер один</b><br>";
foreach ($array as $value) {
    Y($value);
}

echo "<br><b>вывод результатов выполнения функции X для всех дочерних массивов из задачи номер один</b><br>";
foreach ($array as $value) {
    echo '<pre>';
    print_r(X($value));
    echo '</pre>';
}