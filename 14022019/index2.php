<?php
    $str = "Всем <b>привет</b> !!!";
    $pat = "/<b>.*<\/b>/i";
    $rep = "<i>$0</i>"; //$0 - все регулярное ваыражение

    $str2 = preg_replace($pat, $rep, $str);
    echo $str2;

    echo "<br>";

    $str = "Всем <b>привет</b> !!!";
    $pat = "/<b>(.*)<\/b>/i";
    $rep = "<i>$1</i>"; //только выражение между <b>

    $str2 = preg_replace($pat, $rep, $str);
    echo $str2;
?>