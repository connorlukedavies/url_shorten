<?php
require('dbconnect.php'); //connection to database 

function counter($conn, $shorturl) { //creating the function counter that is going to use $conn and $shorturl
    $q = "SELECT visits FROM urls WHERE new_url ='$shorturl'"; //select query to find the amount of visits the short url has
    $r = mysqli_query($conn, $q); // runs the query

    if (mysqli_num_rows($r) != 0) { //if the number of rows return is not equal to zero = if the query finds a result
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) { // takes the array of results and uses a while loop to go through them = for this application there should only ever be one row
            $count = $row['visits'] + 1; // this sets a new variable called count to equal what the current visit value is plus 1
            $q = "UPDATE urls SET visits = $count WHERE new_url ='$shorturl'"; // sql statement to update the visit value to what the count variable equals 
            $r = mysqli_query($conn, $q); // run the update query
        }
    } else {
        echo "the count is not working"; // output this when the count isn't working
    }
}

?>