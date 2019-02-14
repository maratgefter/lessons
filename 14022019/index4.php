<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    
</body>
</html>


<?php
    $str = file_get_contents('index5.html');
    $pat = '/<head>(.*?)<\/head>/';
    $str2 = preg_replace($pat, $rep, $str);
    $rep = "$1";
    echo htmlspecialchars($str2);
?>