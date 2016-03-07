<!DOCTYPE html>
<html>

    <head>

    </head>
    <body>
        <form method="get">
            <input type = "text" name="string">
            <input type="submit" value="Go!">
        </form>
    </body>
</html>

<?php

if(!empty($_GET)){
    $text=$_GET['string'];
    # Задание 1
    $arr = array();
    for ($i=0; $i<mb_strlen($text, 'utf8'); $i++){
        $char = mb_substr($text, $i, 1, 'utf8');
        if(!in_array($char, $arr)){
            $arr[] = $char;
        }
        else{
            exit("Строка не уникальна. Повторяется <strong>$char");
        }
    }
  echo 'Строка уникальна';
  
}
?>