<pre>
<?php
    $arr = array("one", "two");
    function sum_2($array) {
        print_r($array);
    }
    echo call_user_func("sum_2", $arr);
    echo "<br>";
?>
</pre>