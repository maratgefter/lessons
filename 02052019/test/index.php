<?php
require_once "BMW.php";
require_once "Tesla.php";
require_once "Mustang.php";

    $tesla = new Tesla;
    echo $tesla->drive();

    $mustang = new Mustang;
    echo $mustang->drive();
    $mustang->fillTank(1);

    $bmw = new BMW;
    echo $bmw->drive();
?>