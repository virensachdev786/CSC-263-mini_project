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
        $studentId = $_REQUEST['id'];
        $courseId =  $_REQUEST['course'];
        $term =      $_REQUEST['term'];

        //error handling
        if ( empty($term) or empty($studentId) ) 
        {
            echo "data is empty";
        }
        
        //https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/
        else 
        {
            $sql = 
            "INSERT INTO STUDENTGRADES 
            VALUES ('$courseId' , '$studentid' , '$term' , '$grade')";

            if(mysqli_query($conn, $sql))
            {
                echo "<h3>data stored in a database successfully." 
                    . " Please browse your localhost php my admin" 
                    . " to view the updated data</h3>"; 
      
                echo nl2br("\n $courseId \n $studentid \n $term \n $grade \n");
            } 
            else
            {
                echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
            }
        }
    }

    // Close connection
    mysqli_close($conn);
?>
            
            







