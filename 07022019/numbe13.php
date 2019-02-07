<pre>
<?php
    function sum_2($a, $b) {
        return $sum2 = $a + $b;
    }

    function sum_3($a, $b, $c) {
        return $sum3 = $a + $b + $c;
    }

    echo call_user_func('sum_2', 5, 8);
    echo "<br>";
    echo call_user_func('sum_3', 5, 8, 10);
?>
</pre>