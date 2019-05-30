<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <?php
    include "entity.php";

    $link = mysqli_connect("127.0.0.1", "root", "", "shop");

    $obj = new DB_entity($link, 'salespeople');

    function show($array)
    {
        echo "\t\n<table>";
        foreach ($array as $v) {
            echo "\t\n<tr>";
            foreach ($v as $val) {
                echo "\t<td>$val</td>";
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    $obj->reset_default_select()->add_select('city')->add_select('count(*)')->set_group_by('city') -> add_having('count(*) >= 1');
    echo "<pre>" . $obj->get_sql() . "</pre>";
    show($obj->query());

    ?>
</body>

</html>