<?php
    function get_array_from_xml($str) {    //чтение из файла
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

    function put_array_to_xml($array){ //запись в файл
        $str = "";
        foreach ($array as $value){
                $str .= "<post>\n\t<msg>$value[msg]</msg>\n\t<nik>$value[nik]</nik>\n</post>\n";
        }
        return $str;
    }

    function bb_code($string) {  //bb коды
        $pat = array('/\[b\](.*)\[\/b]/ui',
                     '/\[i\](.*)\[\/i]/ui',
                     '/\[u\](.*)\[\/u]/ui',
                     '/\[img\](.*)\[\/img]/ui');
        $rep = array("<b>$1</b>",
                     "<i>$1</i>",
                     "<u>$1</u>",
                     "<img src='$1' width='400'>");
        $str2 = preg_replace($pat, $rep, $string);
        return $str2;
        }
        
    function smile($string){  //смайлы
        $pat = array('/(:)\)/ui',
                     '/(:-)\)/ui',
                     '/(;-)\)/ui',
                     '/:\(/ui');
        $rep = array("<img src='img/smile_1.png' height='30'>$2",
                     "<img src='img/smile_2.jpg' height='30'>$2",
                     "<img src='img/smile_3.png' height='30'>$2",
                     "<img src='img/smile_4.jpg' height='30'>$2");
        $str2 = preg_replace($pat, $rep, $string);
        return $str2;      
        }

    function swear_words($string) {  //матершина
            $pat = '/дурак|редиска/iu';
            $str2 = preg_match_all($pat, $string, $arr);
            return $arr[0];
        }

    function mark($string) {  //маркдаун
            $pat = array('/~~(.*)~~/ui',
                         '/\*{2}(.*)\*{2}/ui',
                         '/\#(.*)/ui',
                         '/\*{1}(.*)\*{1}/ui');
            $rep = array("<s>$1</s>",
                         "<b>$1</b>",
                         "<h1>$1</h1>",
                         "<i>$1</i>");
            $str2 = preg_replace($pat, $rep, $string);
            return $str2;
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