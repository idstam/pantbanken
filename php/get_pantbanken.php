<?php

$html = file_get_contents("test.html");

$lastPos = 0;
while(true){
    $needle = "<div class=\"vara_background\">";
    $pos = strpos($html, $needle, $lastPos);
    if( $pos === false){
        break;
    }
    $lastPos = $pos + strlen($needle);
    echo($pos . "\n");

    
}

?>