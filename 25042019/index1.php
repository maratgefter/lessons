<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    include "form.php";

    $obj = new Form('post', 'index.php');
    $obj->addLabel(['for'=>'login'], 'Введите Ваше имя');
    $obj->add_input(['type'=>'text', 'id'=>'login', 'placeholder'=>'Login']);
    $obj->addLabel(['for'=>'login'], 'Введите Ваш пароль');
    $obj->add_input(['type'=>'password', 'id'=>'password', 'placeholder'=>'Password']);
    //$obj->addTextarea(['rows'=>'10', 'cols'=>'10'], '123');
    //$obj->addButton(['value'=>'ok'], 'Take');
    $obj->add_input(['type'=>'submit', 'value'=>'Send']);

    echo $obj->show_form();
?>    
</body>
</html>