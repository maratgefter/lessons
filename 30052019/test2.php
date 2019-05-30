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

        $link = mysqli_connect("127.0.0.1", "root", "", "gefter");

        $obj = new DB_entity($link, 'vedomost');

        function show($array) {
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

        $obj->add_select('otdel');
        $obj->add_select('zp');
        $obj->set_group_by('otdel');
        $obj->set_group_by('zp');
        echo $obj->get_sql();
        show($obj->query());
        
    ?>
</body>
</html>