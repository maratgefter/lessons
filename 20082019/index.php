<?php
    include 'autoload.php';

    use Step\Core\serialize;
      
    $obj = new serialize('456.txt');
    // $obj->read_file();
    // $obj->del(2);
    // $obj->edit(1,[4]);
    //print_r($obj->get());

    //$obj->write_file([4=>"10"]);
    //$obj->add([4=>"115"]);

    print_r($obj->get());