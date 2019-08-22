<?php
    include 'autoload.php';

    use Step\Core\php;
      
    $obj = new php('123.php');
    // $obj->read_file();
    // $obj->del(2);
    $obj->edit(1,[4]);
    //print_r($obj->get());