<pre>
<?php
$arr = array('one', 'two', 'three');
echo current($arr)."<br>";
next($arr);
echo current($arr)."<br>";
reset($arr);
echo current($arr)."<br>";
end($arr);
echo current($arr)."<br>";

for($i=0; $i < count($arr); $i++) {
    echo "<br>".$arr[$i]."<br>";
}
?>
</pre>