<?php
    include "connect.php";
    mysqli_query($link,"DELETE FROM `messages` WHERE `messages`.`id` = ".$_GET['id']);
    header ("Location: connect_with_foreach.php");
?>