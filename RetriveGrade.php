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
            /*
            Select statements
            https://www.w3schools.com/php/php_mysql_select.asp
            */
            $sql = 
            "SELECT courseid, studentid, term, grade 
            FROM GRADES 
            where studentid = '$studentId' and term = '$term' ";
            
            //saving query resultant bool in an obj
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) 
            {
                echo 
                "<table>
                <tr>
                    <th> courseid   </th> 
                    <th> studentid  </th>
                    <th> term       </th>
                    <th> grade      </th>
                </tr>";
                // output data of each row
                while($row = $result->fetch_assoc())
                {
                    echo 
                    "<tr><td>".$row["courseid"].
                    "</td><td>".$row["studentid"].
                    "</td><td>".$row["term"].
                    "</td><td>".$row["grade"].
                    "</td></tr>";
                }

                //Back to menu option
                echo "<a href=menu.html>Return to Menu </a>";
        
            }
            else 
            {
                echo "0 results";
            }
        }
    }
    // Close connection
    mysqli_close($mysqli);
?>