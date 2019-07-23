<?php

class productController extends tableController {

    public $table_name = 'product';

    function __construct($view) {
        parent::__construct($view);
        global $conf;
        $this->table = new productModel(new mysqli($conf['host'], $conf['user'], $conf['password'], $conf['db']), $this->table_name);
        $this->table->set_page_size(5);
    }

}

?>