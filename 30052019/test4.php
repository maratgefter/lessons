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

    <form action="" method="post">
        <input type="text" name="city" placeholder="city">
        <input type="text" name="cname" placeholder="cname">
        <input type="submit" value="Search">
    </form>
    <?php
    include "entity.php";

    $link = mysqli_connect("127.0.0.1", "root", "", "shop");

    $obj = new DB_entity($link, 'customers');

    function show($array)
    {
        if (is_array($array)) {
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
    }
    $obj->reset_default_select();
    if(isset($_POST['city'])) {
        $obj->reset_default_select()->add_where_condition("city LIKE '%$_POST[city]%'")->add_where_condition("cname LIKE '%$_POST[cname]%'");
    }
    
    echo "<pre>" . $obj->get_sql() . "</pre>";
    show($obj->query());
    show($obj->query());
    print_r($obj->error_list);
    print_r($obj->get_fields());
    ?>
</body>

</html>