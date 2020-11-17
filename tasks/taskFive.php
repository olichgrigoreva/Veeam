<?php
require('../configuration.php');

//5. функция, принимающая на вход двумерный массив из первого задания и выводящая на экран
// индексы дочерних массивов в порядке возрастания суммы их элементов.
echo "<br><b>вывод индексов дочерних массивов в порядке возрастания суммы их элементов</b><br>";

foreach ($array as $key => $item) { //получаем подмассив
    $sum = 0;
    foreach ($item as $value) {
        $sum += $value;
    }
    $result[$key] = $sum;
}

echo "суммы элементов подмассивов";
echo '<pre>';
print_r($result);
echo '</pre> <br>';

asort($result);

echo "<b>индексы дочерних массивов в порядке возрастания суммы их элементов</b><br>";
foreach ($result as $key => $val) {
    echo $key . "\n";
}
