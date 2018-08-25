<?php
$s;
$r;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            S :<input type="text" name="$s">
            R:<input type="text" name="$r"> 
            <input type="submit" value="Send">
        </form>
        <?php              
       if (filter_input(INPUT_POST($s))*sqrt(2)<=filter_input(INPUT_POST($r)*2)){
            echo 'Yes';
        } else {
            echo 'NO';
        }        
        ?>
    </body>
</html>