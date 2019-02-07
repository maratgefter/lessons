<?php
include '25.php';
function speed_test($fun, $arg, $n = 100000){
    $time1 = microtime(true);

    for ($i = 0; $i < $n; $i++){
        $fun($arg);
    }

    $time2 = microtime(true);
    
    return $time2 - $time1;
}

echo "<h1>Сложение элементов массива</h1>";
echo "Пользовательская функция my_sum: ".speed_test('my_sum', $arr)."секунд!";
echo "<br>";
echo "Встроенная функция array_sum: ".speed_test('array_sum', $arr)."секунд!";
echo "<br>";
echo "Встроенная функция быстрее в следующее количество раз: ".speed_test('my_sum', $arr)/speed_test('array_sum', $arr);

echo "<h1>Произведение элементов массива</h1>";
echo "Пользовательская функция my_composition: ".speed_test('my_composition', $arr)."секунд!";
echo "<br>";
echo "Встроенная функция array_product: ".speed_test('array_product', $arr)."секунд!";
echo "<br>";
echo "Встроенная функция быстрее в следующее количество раз: ".speed_test('my_composition', $arr)/speed_test('array_product', $arr);

echo "<h1>Вывод массива в обратном порядке</h1>";
echo "Пользовательская функция my_rev: ".speed_test('my_rev', $arr)."секунд!";
echo "<br>";
echo "Встроенная функция array_reverse: ".speed_test('array_reverse', $arr)."секунд!";
echo "<br>";
echo "Встроенная функция быстрее в следующее количество раз: ".speed_test('my_rev', $arr)/speed_test('array_reverse', $arr);
?>