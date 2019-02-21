<?php
    function get_post($str){
        $pat = '/<post>(.*?)<\/post>/ius';
        preg_match_all($pat, $str, $arr);
        return ($arr);
    }

    function get_nik($str){
    $pat = '/<nik>(.*?)<\/nik>/ius';
    preg_match_all($pat, $str, $arr);
    return ($arr);
    }

    function get_msg($str){
        $pat = '/<msg>(.*?)<\/msg>/ius';
        preg_match_all($pat, $str, $arr);
        return ($arr);
    }

    function all_post($str){
        $pat_nik = '/<nik>(.*?)<\/nik>/ius';
        $arr_nik = preg_match_all($pat_nik, $str, $arr);
        $pat_msg = '/<msg>(.*?)<\/msg>/ius';
        $arr_msg = preg_match_all($pat_msg, $str, $arr2);
        $message = array($arr[0], $arr2[0]);
        return $message;
    }
?>