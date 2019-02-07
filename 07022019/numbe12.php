<pre>
<?php
    $msg = "Hello!";

    $test = function()use(&$msg){
        echo $msg;
    };

    $msg = "Bye!";

    $test();
?>
</pre>