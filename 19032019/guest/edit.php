<?php
    include "connect.php";
    $update_query = "UPDATE `messages` SET user_name = '".$_POST["user_name"]."', message = '".$_POST["message"]."' WHERE `messages`.`id` = '".$_POST["id"]."'";
    mysqli_query($link, $update_query);
    header ("Location: connect_with_foreach.php");
?>