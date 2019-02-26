<pre>
<?php
    function get_array_from_xml($str) {
        $matches = null;
        preg_match_all('/<post>(.*?)(<msg>(.*?)<\/msg>)(.*?)(<nik>(.*?)<\/nik>)(.*?)<\/post>/ius', $str, $matches);

        $msg = $matches[3];
        $nik = $matches[6];

        $array = array();
        foreach ($msg as $key => $value){
            $array[] = array("msg" => $msg[$key], "nik" => $nik[$key]);
        }

        return $array;
    }

    function put_array_to_xml($array){
        $str = "";
        foreach ($array as $value){
                $str .= "<post>\n\t<msg>$value[msg]</msg>\n\t<nik>$value[nik]</nik>\n</post>\n";
        }
        return $str;
    }

    $arr = get_array_from_xml(file_get_contents("x.xml"));
    print_r($arr);

    $str = put_array_to_xml($arr);
    echo $str;

    file_put_contents("x.xml",$str);

?>
</pre>