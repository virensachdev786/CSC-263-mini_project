<!DOCTYPE html>
<html>
    <head>
        <title>PHP Responses</title>
    </head>
    <body>
   
    <!-- https://www.w3schools.com/php/php_mysql_connect.asp -->
    <?php
        //Connect DB
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        } 
        echo "Connected successfully";

    ?>
    </body>
</html>