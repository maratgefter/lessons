<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Проверка электронной почты</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form action="" method="post">
        <textarea name="feld" id="feld" cols="30" rows="10"></textarea>
        <input type="submit" value="Давай!">
    </form>
</body>
</html>

<pre>
<?php
//echo preg_match_all('/@/', $_POST["feld"]);
//echo preg_match_all("/да|yes/", $_POST["feld"]);
//echo preg_match_all("/перв(ое|ый)/", $_POST["feld"]);
//echo preg_match_all("/s(o|u)n/", $_POST["feld"]);
//echo preg_match_all("/son|sun/", $_POST["feld"]);
//echo "Число потвторений: ".preg_match_all('/\d{3}/', $_POST["feld"], $mathes)."!";
//echo "Число потвторений: ".preg_match_all('/\+\d{12}/', $_POST["feld"], $mathes)."!";
//echo "Число потвторений: ".preg_match_all('/\/\*.*?\*\//', $_POST["feld"], $mathes)."!";
//echo "Число потвторений: ".preg_match_all('/\b\w{10}\b/u', $_POST["feld"], $mathes)."!";
//echo "Число потвторений: ".preg_match_all('/да|yes/iu', $_POST["feld"], $mathes)."!";
echo "Число потвторений: ".preg_match_all('/(\S.+?[.!?])(?=\s+|$)/', $_POST["feld"], $mathes)."!";
echo "<br>";
print_r ($mathes);
?>
</pre>