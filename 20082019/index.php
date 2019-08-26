<?php
    include 'autoload.php';

    use Step\Core\serialized;
      
    $obj = new serialized('123.php');
    // $obj->read_file();
    // $obj->del(2);
    // $obj->edit(1,[4]);
    //print_r($obj->get());

    $obj->ab();

    print_r($_GET);