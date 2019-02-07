<pre>
<?php
    $a1 = ['Ringo', 'Paul', 'George', 'John', 'Richard'];
    print_r($a1);

    $a2 = array_filter($a1, function($x){return $x[0]=="R";});
    print_r($a2);

    $a3 = array_filter($a1, function($x){if (iconv_strlen($x) < 5)return $x;});
    print_r($a3);
?>
</pre>