<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include "connect.php";
        $result = mysqli_query($link,"SELECT * FROM `messages` WHERE `messages`.`id` = ".$_GET['id']);
        $see = mysqli_fetch_assoc($result);
    ?>

    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?=$see['id']?>">
        <input type="text" name="user_name" value="<?=$see['user_name']?>"><br><br>
        <input type="text" name="message" value="<?=$see['message']?>"><br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>