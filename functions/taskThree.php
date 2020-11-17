<?php
//3. функция Y, принимающая на вход одномерный массив натуральных чисел,
// которая будет выводить количество чётных и нечётных чисел внутри массива.
function Y($array)
{
    $evenCount = 0;
    $oddCount = 0;
    echo "<br>Исходный массив:";
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    foreach ($array as $key => $value) {
        if ($value % 2 == 0) {
            $evenCount++;
        } else {
            $oddCount++;
        }
    }
    echo "<br>Количество четных чисел: " . $evenCount;
    echo "<br>Количество нечетных чисел: " . $oddCount;
}
