<?php

    $html = file_get_contents('index4.html');
    $pattern="/<[Aa][\s]{1}[^>]*[Hh]{1}[Rr]{1}[Ee]{1}[Ff]{1}[^=]*=[\'\"\s]*([^\"\'\s>#]+)[^>]*>/";
    
    preg_match_all($pattern, $html, $match);
    $url=$match[1];
                            
    for ($i=0; $i<count($url); $i++){
    echo $url[$i]."<br>";
    }
        
?>