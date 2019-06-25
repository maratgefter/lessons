<?php

include 'config.php';

$link = new mysqli($conf['host'], $conf['user'], $conf['password'], $conf['db']);
$obj = new DB_entity2($link, $conf['table']);

?>

<!doctype html>
<html lang="en">
  <head>
   
  </head>
  <body>
    <?php

        function show($table, $fields, $ordered_field=null, $fild_comments = null) {
            if (is_array($table)) {
                echo "<table>";
                echo "<tr>";
                foreach ($fields as $value) {
                    echo "<th><a href='?order=$value" . 
                    ($ordered_field == $value ? (isset($_GET['dir']) ? "" : "&dir=desc") : "") . "'>".(empty($fild_comments[$value]) ? $value : $fild_comments[$value]) . 
                    ($ordered_field == $value ? (isset($_GET['dir']) ? "🔽" : "🔼") : "") . "</a></th>";
                }
                foreach ($table as $v) {
                    echo "<tr>";
                    foreach ($v as $val) {
                        echo "<td>$val</td>";
                    }
                }
                echo '</table>';
            }
        }

        if (isset($_GET['order'])) {
            if (isset($_GET['dir'])) {
                $obj->add_order_by_desc($_GET['order']);
            } else {
                $obj->add_order_by_asc($_GET['order']);
            }
        }

        
        //show($obj->query(), $obj->get_fields(), $_GET['order'], $obj->get_field_comments());
        //echo $obj->get_random_field();
        print_r($obj->get_random_fields(2));
        ?>
  </body>
</html>