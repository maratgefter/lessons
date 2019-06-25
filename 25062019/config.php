<?php
    $conf['host'] = 'localhost';
    $conf['user'] = 'root';
    $conf['password'] = '';
    $conf['db'] = 'jokes';
    $conf['table'] = 'anekdotes';
    $conf['id'] = $_GET['id'];

    spl_autoload_register(function($name){
        require 'classes/'.$name.'.php';
    })
?>