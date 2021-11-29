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
        $term = $_REQUEST['term'];
        $studentId = $_REQUEST['id'];

        //error handling
        if ( empty($term) or empty($studentId) ) 
        {
            echo "data is empty";
        } 
        
        else 
        {
            //save to variable print statement
            echo $term ," and ", $studentId, " saved to variables";
            /*
            Select statements
            https://www.w3schools.com/php/php_mysql_select.asp
            */
            $sql = 
            "SELECT courseid, studentid, term, grade 
            FROM STUDENTGRADES 
            where studentid = '$studentId' and term = '$term' ";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) 
            {
                // output data of each row
                while($row = $result->fetch_assoc()) 
                {
                    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                }
            } 
            
            else 
            {
                echo "0 results";
            }
        }
    }
    $conn->close();
?>