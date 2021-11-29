<!DOCTYPE html>
<html>
    <head>
        <title>PHP Responses</title>
    </head>
    <body>

    <?php
    
        //helpful db commands to run in SQL to connect your DB to PHP
        //CREATE USER 'viren'@'127.0.0.1' IDENTIFIED WITH mysql_native_password BY 'oooooooo';
        //GRANT ALL PRIVILEGES ON * . * TO 'viren'@'127.0.0.1';
        $mysqli = new mysqli('127.0.0.1', 'viren', 'oooooooo', 'STUDENTGRADES');  
        if ($mysqli->connect_error) 
        {  
            die('Connect Error (' . $mysqli->connect_errno . ')');  
        };  
          
        echo 'ok <br>';  

        echo 'hi';
    ?>
    </body>
</html>