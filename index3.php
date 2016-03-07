<!DOCTYPE html>
<html>

    <head>

    </head>
    <body>
        <form method="get">
            <input type = "text" name="date">
            <input type="submit" value="Go!">
        </form>
    </body>
</html>

<?php

if(!empty($_GET)){
    $text=$_GET['date'];
    # Задание 3
    if (preg_match('/^[0-9]{1,2}(-|\.)[0-9]{1,2}(-|\.)([0-9]{2}|[0-9]{4})$/', $text)) {
     echo "дата указана верно";   
    }
    
    else{ 
        echo "неверный формат даты";
        }  
}
?>