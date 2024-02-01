<?php
$y=23;
$x=12;
$z=$y+$x;
function test() {
    global $y,$x; 
}
test();
echo $z;
function text() {
   $GLOBALS['z'] = $GLOBALS['y'] + $GLOBALS['x'];
}
text();
echo $z;
?>