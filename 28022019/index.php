<?php
    session_start();
    
    //print_r ($_POST);
    if(isset($_POST['formlogin']) && ($_POST['formlogin'] == 'login')){
        $_SESSION['username'] = $_POST['nik'];
        $_SESSION['color'] = $_POST['color'];
        $_SESSION['font_color'] = $_POST['font_color'];
    }

    switch ($_GET['pg']) {
        case 'pge':
                $filename = 'login.php';
            break;
        case 'pgl':
                $_SESSION = array();
                session_destroy();
                $filename = 'str1.php';
            break;
        case 'pg1':
                $filename = 'str1.php';
            break;
        
        case 'pg2':
                $filename = 'str2.php';
        break;    

        case 'pg3':
                $filename = 'str3.php';
        break;

        default:
                $filename = 'str1.php';
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: <?=isset($_SESSION['color'])?$_SESSION['color']:"white";?>; /*тернарный оператор*/
            color: <?=isset($_SESSION['font_color'])?$_SESSION['font_color']:"black";?>;
        }
        
        .one{
            width: 100px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="one" valign="top"><?php include 'meny.php'; ?></td>
            <td><?php 
                include $filename;
            ?></td>
        </tr>
    </table>
    <?php
        if (isset($_SESSION['username'])) {
            echo "<p>"."Вы вошли как: ".$_SESSION['username']."!"."</p>";
        }
    ?>
</body>
</html>