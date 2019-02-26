<?php
   session_start();


    // if(!isset($_SESSION["count"]))
    //     $_SESSION["count"] = 1;
    // else
    //     $_SESSION["count"]++;

    // echo $_SESSION["count"];

    echo isset($_SESSION['a']) ? $_SESSION['a']++ : $_SESSION['a'] = 0;
?>

<a href="session2.php">Стр. 2</a>