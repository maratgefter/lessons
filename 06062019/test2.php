<?php
    include 'entity.php';

    $link = mysqli_connect("127.0.0.1", "root", "", "gefter2805");

    $obj = new DB_entity($link, 'object');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
        table {
            border-collapse: collapse;
        }

        td, th {
            border: 2px solid black;
        }

        a {
            text-decoration: none;
        }
    </style> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <?php
            foreach (array_diff($obj->get_fields(), ['id']) as $k => $v) {
                echo "<label for=".$v.">".$v."</label><br><input type='text' name='".$v."' id='$v'><br><br>\n";
            }
        
        echo "<input type='submit' value='Добавить запись'><br><br>";

        function show($table, $field, $ordered_field = null) 
        {
            echo "\t\n<table>";
            echo "<tr>";
            foreach ($field as $v) {
                echo "\t<th><a href='?order=$v'>$v".($ordered_field == $v ? "🔼" : "")."</a></th>";
            }
            echo "<th></th></tr>";
            foreach ($table as $v) {
                echo "\t\n<tr>";
                foreach ($v as $val) {
                    echo "\t<td>$val</td>";    
                }
                echo "<td><a href='?delete=$v[id]'>✖️</a></td></tr>";
            }
            echo '</table>';
        }

        $obj->add_order_by_asc($_GET['order']);
        
        if (isset($_GET['delete'])) {
            echo $obj->delete_from($_GET['delete']);
        }

        if (!empty($_GET)) {
            $obj->add(array_intersect_key($_GET, array_flip($obj->get_fields())));
        }
        
        show($obj->query(), $obj->get_fields(), $_GET['delete']);
        if (!empty($obj->error_list)) {
            foreach ($obj->error_list as $value) {
                echo $value."<br>";
            }
        }

        echo $obj->row_count();
        ?>
        
    </form>
</body>
</html>