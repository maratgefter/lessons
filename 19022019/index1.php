<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p><textarea name="text" cols="30" rows="10" placeholder="<?=(isset($_POST["text"])) ? $_POST["text"] : "Введите адрес сайта";?>"></textarea></p>
        <input type="submit" value="Ok!!!">
    </form>

    <?php
        $str = $_POST['text'];
        //$pat = '/(привет)/ui';
        //$pat = '/(:)\)|(:-)\)|(;-)\)/ui';
        $pat = array('/(:)\)/ui',
                     '/(:-)\)/ui',
                     '/(;-)\)/ui',
                     '/:\(/ui');
        $rep = array("<img src='img/smile_1.png' height='30'>$2",
                     "<img src='img/smile_2.jpg' height='30'>$2",
                     "<img src='img/smile_3.png' height='30'>$2",
                     "<img src='img/smile_4.jpg' height='30'>$2");
        $str2 = preg_replace($pat, $rep, $str);
        echo $str2;        
    ?>

</body>
</html>