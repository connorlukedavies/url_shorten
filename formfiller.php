<?php
require('dbconnect.php'); //database connection

//this function is used to fill the placeholder in the in the form with the previous url 
function formplaceholder($conn) { //creating the function formplaceholder
    if (isset($_GET['code'])) { //if statement to check if ?code= is set in the url
        $url = $_GET['code']; // if it is set it will add this value to the $url variable
        $q = "SELECT orig_url FROM urls WHERE new_url = '$url'"; // select statement to find the long query based on the short url generated and stuck into the url ?code=
        $r = mysqli_query($conn, $q); // run the query
        
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) { // while statement to locate the original url from the results array 
            echo $row['orig_url']; //outputting the original url
        }
    } else {
        echo "https://www.example.co.uk"; // outputting a default placeholder if $_GET['code'] isn't set
    }
}
?>