<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" id="order">
        <select name="order">
            <option value="ORDER BY `date` DESC">Дата</option>
            <option value="ORDER BY `fio` DESC">Имя</option>
        </select>
        <input type="submit" value="OK">
    </form>

<?php
    include 'config.php';
    $mysqli = new mysqli($conf['host'], $conf['user'], $conf['password'], $conf['data_base']='mydb');

    if($mysqli->connect_errno){
        echo "Не удалось подключиться к MYSQL: (".$mysqli->connect_errno.")".$mysqli->connect_error;
    }

    $page_number = $_GET['page'];
    $size = $conf['page_size'];

    $count=$mysqli->query("SELECT COUNT(*) AS c FROM `table1`")->fetch_assoc()['c'];
    $res = $mysqli->query("SELECT * FROM `table1` LIMIT ".(($page_number-1)*$size).", ".$size);
    $count_of_pages=ceil($count/$conf['page_size']);
    $pagination='';

    for ($i=1; $i <= $count_of_pages; $i++) { 
        $pagination.= "<a href='?page=$i' ".($_GET['page']==$i?'class="selected"':'').">$i</a>";
    }
        $pagination = "<div class='pages'>".$pagination."</div>";

    echo $pagination;

    while ($row=$res->fetch_assoc()){
        echo '<div id="opinion">';
        foreach($row as $v) {
            echo "<div>".$v."</div>";
        }
        echo '</div>';
    }
    echo $pagination;
?>

</body>
</html>