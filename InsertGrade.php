<?php

    /*
    ESTABLISHING DATABASE CONNECTION
    */
    $mysqli = new mysqli('127.0.0.1', 'viren', 'oooooooo', 'STUDENTGRADES');  
    if ($mysqli->connect_error) 
    {  
        die('Connect Error (' . $mysqli->connect_errno . ')');  
    };  

    //Getting form data from trans.html
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {

        // collect value of input field
        $grade =     $_REQUEST['grade'];
        $studentId = $_REQUEST['studentId'];
        $courseId =  $_REQUEST['courseId'];
        $term =      $_REQUEST['term'];

        echo " <strong> Entered values <br>
                             courseid: $courseId <br>
                             studentId: $studentId <br>
                             term: $term <br>
                             grade: $grade </strong> ";

        //error handling
        if ( empty($term) or empty($studentId) ) 
        {
            echo "<br> data is empty <br>";
        }
        
        //https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/
        else 
        {
            $sql = 
            "INSERT INTO grades 
            VALUES ('$courseId' , '$studentId' , '$term' , '$grade')";

            if(mysqli_query($mysqli, $sql))
            {
                //https://stackoverflow.com/questions/26552268/redirecting-back-to-index-page-after-posting-in-php-mysql
                echo 
                "
                <script>
                    function redir()
                    {
                        alert('record added..');
                        window.location.assign('menu.html');
                    }
                </script>
                <body onload='redir();'> </body>
                ";
            }
            else
            {
                echo "<br> ERROR: Hush! Sorry $sql. ". mysqli_error($mysqli);
            }
        }
    }

    // Close connection
    mysqli_close($mysqli);
?>
            
            







