<?php
    session_start();
    include 'config.php';
    if (!isset($_POST['admin']) && !isset($_POST['password'])) {
        header('Location: https://google.com');
        exit();
    }
    if ($_POST['admin'] == $conf['admin'] && $_POST['password'] == $conf['password2']) {
        $_SESSION['admin'] = true;
        header('Location: read.php');     
    } else {
        header('Location: login.php');
    }
?>