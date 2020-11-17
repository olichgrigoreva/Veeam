<?php
//1. функция для генерации двумерного массива
function twoDimensionalArray($m, $n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            $arr[$i][$j] = random_int(-100, 100);
        }
    }
    return $arr;
}
