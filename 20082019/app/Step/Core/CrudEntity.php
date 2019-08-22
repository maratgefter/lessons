<?php

namespace Step\Core;

abstract class CrudEntity implements jsonInterface
{
    protected $file_name;

    function __construct($file_name)
    {
        $this->file_name = $file_name;
    }

    public function del(int $id)
    {
        /**
         * @var array $new_array
         */
        $new_array = $this->get();
        unset($new_array[$id]);
        $this->write_file($new_array);
    }

    public function edit(int $id, array $array)
    {
        /**
         * @var array $new_array
         */
        $new_array = $this->get();
        $new_array[$id] = $array;
        $this->write_file($new_array);
    }

    public function add(array $data_array)
    {
        /**
         * @var array $new_array
         */
        $new_array = $this->get();
        $new_array[] = $data_array;
        $this->write_file($new_array);

    }

    abstract public function get();
    abstract public function write_file(array $data_array);
}