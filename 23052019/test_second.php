<?
session_start();
include 'Tic_Tac_Toe_Para.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tic-Tac-Toe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    $obj = new AutoGo(3);
    $obj->load_data_from_session();

    if (isset($_GET['i']) && isset($_GET['j'])) {
        $obj->put_cross($_GET['i'], $_GET['j']);
        $obj->put_circle($_GET['i'], $_GET['j']);
    }

    echo $obj->check_winner();

    $obj->save_data_to_session();

    $obj->show();
    ?>
</body>
</html>