<?php

namespace Step\Core;

class php extends CrudEntity
{
    

    function get()
    {
        return include($this->file_name);
        // return json_decode(file_get_contents($this->file_name), true);
    }

    function write_file(array $data_array)
    {
        file_put_contents($this->file_name, '<?php return '.var_export($data_array, true).';');
    }
}


?>