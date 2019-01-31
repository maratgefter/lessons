<pre>
<?php
$arr = array(25, 10, 5, 556, 4564,);

//for
function mysum ($arr) {
    $sum = 0;
    for($i=0; $i < count($arr); $i++){
        $sum = $sum + $arr[$i];
    }
}

$start1 = microtime(1);
for ($j = 0; $j < 1000000; $j++) {
    mysum($arr);
}
$end1 = microtime(1);
$time1= $end1 - $start1;
//for

//arraysum
$start2 = microtime(1);
for ($i = 0; $i < 1000000; $i++) {
$d = array_sum($arr);
}
$end2 = microtime(1);
$time2= $end2 - $start2;

$more = $time1/$time2;
//arraysum

 //foreach
function forarr($arr) {
    $s =0;
        foreach($arr as $value) {
            $s = $s + $value;   
    return $s;
    }
}
$start3 = microtime(1);
for ($i = 0; $i < 1000000; $i++) {
    forarr($arr);
}
$end3 = microtime(1);
//foreach

$time3 = $end3 - $start3;
$more2 = $time1/$time3;

echo "Работа пользовательской функции: ".$time1."<br>";
echo "Работа встроенной фунцкции: ".$time2."<br>";
echo "Работа функции foreach: ".$time3."<br>";
echo "Встроенная фунция быстрее в следующее количество раз: ".$more."<br>";
echo "Работа функции foreach быстрее for в следующее количество раз: ".$more2."<br>";

?>
</pre>