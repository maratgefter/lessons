<pre>
<?php
$arr = ["image 1", "IMAGE 10", "image 100", "image 2", "image 22", "image 31", "image 1000", "image 200", "image 29" ,];
$arr1 = [3, 2, 1, 4];
$arr2 = ["one", "four", "three", "two"];
$arr3 = ["один", "четыре", "три", "два",];
print_r ($arr);
natsort($arr);
print_r($arr);
shuffle($arr);
natcasesort($arr);
print_r($arr);
shuffle($arr);
array_multisort($arr1, SORT_NUMERIC, $arr2, SORT_STRING, $arr3, SORT_STRING);
print_r($arr1);
print_r($arr2);
print_r($arr3);
?>
</pre>