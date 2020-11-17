<?php
//2. функция X, принимающая на вход одномерный массив натуральных чисел,
// которая будет выводить элемент и индексы всех одинаковых элементов массива.
function X($array)
{
    $new = array_filter(array_count_values($array));
    foreach ($new as $key => $value) { // $key - индекс элемента массива, $value - значение элемента массива
        if ($value > 1) {
            $resultArray[$key] = array_keys($array, $key);
        }
    }
    return $resultArray;
}
