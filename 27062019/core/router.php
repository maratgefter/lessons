<?php

$siteClass = (isset($_GET["t"]) ? $_GET["t"] : 'site') . 'Controller';

$method = 'action' . (isset($_GET["a"]) ? $_GET["a"] : 'About');

if(class_exists($siteClass)) {
    $MVC = new $siteClass();

    if(method_exists($MVC, $method)) {
        $MVC -> {$method}();
    } else {
        echo "Нет такого метода: $method";
    }
} else {
    echo "Нет такого класса: $siteClass";
}

?>