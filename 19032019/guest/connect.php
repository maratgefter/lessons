<?php
    $link = mysqli_connect("localhost", "root", "", "guest_book");
    if (mysqli_connect_errno()) {
        echo "Не удалось подключиться к MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error();
    }
?>