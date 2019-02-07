<pre>
<?php
    $a1 = array(1,2,3,4,5,6,7,8,9,10);
    print_r($a1);

    $a2 = array_map(function($x){return $x*$x;}, $a1);
    print_r($a2);

    function my_array_map ($fun, $array) {
        foreach ($array as $value) {
            $c[] = $fun($value);
        }
        return $c;
    }
    $q2 = my_array_map(function($x){return $x*$x;}, $a1);
    print_r ($q2);
?>
</pre>