<?php
    require_once ("class.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    $obj = new TicTacToe(4);
    $obj -> show();
    $obj -> put_cross()(2, 0);
    $obj -> show_field();
    $obj -> put_circle()()(2, 1);
    $obj -> show_field();
?>