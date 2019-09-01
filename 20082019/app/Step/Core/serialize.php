<?php

namespace Step\Core;

class serialize extends CrudEntity
{
    function get()
    {
        return unserialize(file_get_contents($this->file_name));
    }

    function write_file(array $data_array)
    {
        file_put_contents($this->file_name, serialize($data_array));
    }
}


?>