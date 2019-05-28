<?php
    class DB_entity 
    {
        protected $link;
        protected $table_name;
        protected $default_select = [
            'SELECT' => '*', 
            'FROM' => null, 
            'WHERE' => null, 
            'GROUP BY' => null, 
            'HAVING' => null, 
            'ORDER_BY' => null, 
            'LIMIT' => null];
        protected $current_select = [];

        function __construct($link, $table_name)
        {
            $this->link = $link;
            $this->table_name = $table_name;
            $this->current_select['FROM'] = $this->table_name;
        }

        function get_sql()
        {
            $sql = '';
            foreach (array_merge($this->default_select, $this->current_select) as $k => $v) {
                if (!empty($v)) {
                    $sql .= "$k $v\n";
                }
            }
            return $sql;
        }

        function query()
        {
            $query_result = $this->link->query($this->get_sql());
            $result = [];
            while ($row = $query_result -> fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
        }

        function add_where_condition($str)
        {
            if (!empty($this->current_select['WHERE'])) {
                $this->current_select['WHERE'] .= " AND $str";
            } else {
                $this->current_select['WHERE'] = $str;
            }
        }

        function reset_where_condition()
        {
            unset($this->current_select['WHERE']);
        }

        function add_order_by_asc($str)
        {
            if (!empty($this->current_select['ORDER BY'])) {
                $this->current_select['ORDER BY'] .= ", $str";
            } else {
                $this->current_select['ORDER BY'] = $str;
            }
        }

        function add_order_by_desc($str)
        {
            if (!empty($this->current_select['ORDER BY'])) {
                $this->current_select['ORDER BY'] .= ", $str DESC";
            } else {
                $this->current_select['ORDER BY'] = "$str DESC";
            }
        }

        function reset_order_by()
        {
            unset($this->current_select['ORDER BY']);
        }

        function reset_select()
        {
            //$this->current_select['SELECT'] = null;
            unset($this->current_select['SELECT']);
        }

        function add_select($str)
        {
            $this->current_select['SELECT'] = !empty($this->current_select['SELECT']) ? $this->current_select['SELECT'].", $str" : $str; 
        }
    }
?>