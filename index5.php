
<html>
    <form>
        <input type="text" name="a">
        <input type="submit">
    </form>
</html>
<?php
   $text = $_GET['a'];
    preg_match("/.*\.(.*)/", $text, $match);
    echo $match[1].'<br>';
        
?>