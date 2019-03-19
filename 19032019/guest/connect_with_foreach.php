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
    <title>Guest Book</title>
</head>
<body>
    <h1>Гостевая книга</h1>
    <p>Здравствуйте! Оставьте свой отзыв в нашей гостевой книге!</p>
    <p>В нашей книге можно использовать смайлики:</p>
    <ul>
        <li><img src='img/smile_1.png' height='30'> - :)</li>
        <li><img src='img/smile_2.jpg' height='30'> - :-)</li>
        <li><img src='img/smile_3.png' height='30'> - ;-)</li>
        <li><img src='img/smile_4.jpg' height='30'> - :(</li>
    </ul>
    <p>Также доспускается использование bb-кодов:</p>
    <ul>
        <li>[b]...[/b] - Полужирное начертание</li>
        <li>[i]...[/i] - Курсивный текст</li>
        <li>[u]...[/u] - Подчеркнутый текст</li>
    </ul>
    <p>Markdown-коды также реализваны в нашей гостевой книге:</p>
    <ul>
        <li>~~...~~ - Зачеркнутый текст</li>
        <li>**...** - Полужирное начертание</li>
        <li># - Заголовок первого уровня</li>
        <li>*...* - Курсивный текст</li>
    </ul>
    <p><b>За использование ругательств предусмотрен бан!!!</b></p>

    <?php
        include "connect.php";

        include "func.php";
        
        if (!empty(swear_words($_POST['message'])) || !empty(swear_words($_POST['name']))) {
            $_SESSION['time'] = time ();
            $ban_time = time() - $_SESSION['time'];
            $hours = floor($ban_time/3600)%24;
            $minutes = ($ban_time / 60) % 60;
            $seconds = $ban_time % 60;
            ban($hours, $minutes, $seconds);
        } else if (time () < $_SESSION['time'] + 20) {
            $ban_time = time() - $_SESSION['time'];
            $hours = floor($ban_time/3600)%24;                       
            $minutes = ($ban_time / 60) % 60;
            $seconds = $ban_time % 60;
            ban($hours, $minutes, $seconds);
        } 

        //include "upd.php";

        $res = mysqli_query($link, "SELECT * FROM messages");

        echo "<table id='bd_tab'>";
        
        while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
            echo '<tr>';
            foreach ($row as $v) {
                echo "<td>".mark(bb_code(smile(htmlspecialchars($v))))."</td>";
            }
            echo '<td><a href="show_edit.php?id='.$row['id'].'"><img src="img/change.png" height="30" title="изменить"></a> <a href="del.php?id='.$row['id'].'"><img src="img/delete.png" height="30" title="удалить"></a></td></tr>';
        }
        echo '</table>';

        mysqli_free_result($res);

        mysqli_close($link);
    ?>
    
    <form action="upd.php" method="post">
        <input type="text" name="name" placeholder="Input your name">
        <input type="text" name="message" placeholder="Input your message" id = "msg">
        <input type="submit" value="Send" class = "button">
    </form>

</body>
</html>