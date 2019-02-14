<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change <b> to <i></title>
</head>
<body>
    <form action="" method="post">
        <textarea name="text" cols="30" rows="10" placeholder=""><?=(isset($_POST["text"])) ? $_POST["text"] : "Введите число";?></textarea>
        <input type="submit" value="Заменить!">
    </form>
</body>
</html>


<?php
    // $str = $_POST['text'];
    // $pat = "/<b>.*<\/b>/i";
    // $rep = "<i>$0</i>";
    // $str2 = preg_replace($pat, $rep, $str);
    // echo htmlentities($str2);

    // echo "<br>";

    $str = $_POST['text'];
    $pat = '/<\s*[biu]\s*>(.*,?)<\s*\/\s*[biu]\s*>/i';
    $rep = "$1";

    $str2 = preg_replace($pat, $rep, $str);
    echo htmlentities($str2);
?>