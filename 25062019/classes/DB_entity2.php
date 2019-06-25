<?php

class DB_entity2 extends DB_entity
{
    function get_random_field()
    {
        // function random_value($array) {
        //     return $array[array_rand($array)]->query()[0]['anekdote'];
        // }
        $array = (array_column($this->add_select_field('id')->query(), 'id'));
        return $this->reset_default_select()->add_where_condition("id =". $array[array_rand($array)])->query()[0]['anekdote'];

    }    

    function get_random_fields($number)
    {
        $array = (array_column($this->add_select_field('id')->query(), 'id'));
        $ids = [];
        foreach (array_rand($array, $number) as $v) {
            $ids[] = $array[$v];
        }
        //print_r($ids);
        return array_column($this->reset_default_select()->add_where_condition("id IN(".implode(', ', $ids).")")->add_select_field('anekdote')->query(), 'anekdote');

    }    
}