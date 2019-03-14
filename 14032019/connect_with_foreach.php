<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $link = mysqli_connect("localhost", "root", "", "guest_book");

        include "func.php";

        if (mysqli_connect_errno()) {
            echo "Не удалось подключиться к MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error();
        }
        
        if (!empty(swear_words($_POST['message'])) || !empty(swear_words($_POST['name']))) {
            $_SESSION['time'] = time ();
            $ban_time = time() - $_SESSION['time'];
            $hours = floor($ban_time/3600)%24;
            $minutes = ($ban_time / 60) % 60;
            $seconds = $ban_time % 60;
            echo "<div id = 'ban'>Вы заблокированы на 2 минуты за использование нецензурных слов! Прошло времени с момента блокировки: ".$hours." часов ".$minutes." минут ".$seconds." секунд</div>";
        } else if (time () < $_SESSION['time'] + 20) {
            $ban_time = time() - $_SESSION['time'];
            $hours = floor($ban_time/3600)%24;                       //сделать div id='ban' отдельной функцией
            $minutes = ($ban_time / 60) % 60;
            $seconds = $ban_time % 60;
            echo "Вы заблокированы на 2 минуты за использование нецензурных слов! Прошло времени с момента блокировки: ".$hours." часов ".$minutes." минут ".$seconds." секунд";
        } else if (!empty($_POST['name']) & !empty($_POST['message'])) {
            $insert_query = "INSERT INTO `messages` (user_name, message) VALUES ('".$_POST['name']."', '".$_POST['message']."')";
            mysqli_query($link, $insert_query);
        }

        $res = mysqli_query($link, "SELECT * FROM messages");

        echo "<table id='bd_tab'>";
        
        while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
            echo '<tr>';
            foreach ($row as $v) {
                echo "<td>".mark(bb_code(smile($v)))."</td>";
            }
            echo '</tr>';
        }
        echo '</table>';

        mysqli_free_result($res);

        mysqli_close($link);
    ?>

    <form action="" method="post">
        <p><input type="text" name="name" placeholder="Input your name"></p>
        <p><input type="text" name="message" placeholder="Input your message"></p>
        <p><input type="submit" value="Send"></p>
    </form>
    <?php
        print_r ($_POST);
        
    ?>
</body>
</html>