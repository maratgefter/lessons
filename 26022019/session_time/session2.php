<?php 
    session_start(); 
    $_SESSION['time2'] = time();
    $during = $_SESSION['time2'] - $_SESSION['time1'];
    echo "Session time: ".$during."seconds";
?>