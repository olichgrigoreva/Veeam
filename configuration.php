<?php
require('functions/taskOne.php');

//генерация двумерного массива
$array = twoDimensionalArray(5, 5);

echo "<b>вывод исходного двумерного массива</b><br>";
echo '<pre>';
print_r($array);
echo '</pre>';