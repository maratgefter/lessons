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
        <p><input type="text" value="Input your name" name="name"></p>
        <textarea name="message" cols="30" rows="10">Input your message</textarea>
        <p><button type="submit">Send</button></p>
    </form>


<?php      
    $st = "<post>\n\t<nik>\n\t\t".$_POST['name']."\n\t</nik>\n\t<msg>\n\t\t".$_POST['message']."\n\t</msg>\n</post>"."\n\n";
    file_put_contents("x.xml", $st, FILE_APPEND);
    include 'func.php';
    $str = file_get_contents('x.xml');
    /*$post = get_post($str);
    print_r($post[1]);

    $nik = get_nik($str);
    print_r($nik[1]);

    $msg = get_msg($str);
    print_r($msg[1]);*/

    $message = all_post($str);
   // print_r ($message);
    
    echo "<table>";
        foreach ($message[0] as $k => $v) {
            echo "<tr>"."<td>".$message[0][$k]."</td>"."<td>".$message[1][$k]."</tr>"."</td>";
        }
    echo "</table>";
?>

</body>
</html>