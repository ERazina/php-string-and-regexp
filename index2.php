<!DOCTYPE html>
<html>

    <head>

    </head>
    <body>
        <form method="get">
            <input type = "text" name="email">
            <input type="submit" value="Go!">
        </form>
    </body>
</html>

<?php

if(!empty($_GET)){
    $text=$_GET['email'];
    # Задание 2
    if (preg_match('/^[0-0a-zA-Z][0-9a-zA-Z\-\._]*@[0-9A-Za-z\-_]+\.[0-9a-zA-Z]{2,4}$/', $text)){
     echo "e-mail указан верно";   
    }
    
    else{ 
        echo "e-mail указан некорректно";
        }  
}
?>