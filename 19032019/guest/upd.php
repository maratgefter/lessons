<?php
    include "connect.php";
    if (!empty($_POST['name']) & !empty($_POST['message'])) {
        $insert_query = "INSERT INTO `messages` (user_name, message) VALUES ('".$_POST['name']."', '".$_POST['message']."')";
        mysqli_query($link, $insert_query);
        header ("Location: connect_with_foreach.php");
    }
?>