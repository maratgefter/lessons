<?php
function bb_code($string) {
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
        
        function smile($string){
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

        function swear_words($string) {
            $pat = '/дурак|редиска/iu';
            $str2 = preg_match_all($pat, $string, $arr);
            return $arr[0];
        }

        // function swear_words($string){
        //     $pat = '/дурак|редиска/iu';
        //     $rep = "<img src='img/smile_5.jpg' height='70'>";
        //     return $str2 = preg_replace($pat, $rep, $string);
        // }
/*[b]fat[/b] [i]course[/i][u]underline[/u];-):);-):(


[img]http://great.az/uploads/posts/2013-06/1370387258_krasiviye-kartinki_037.jpg[/img]


дурак

редиска*/
?>
