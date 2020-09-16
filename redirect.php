<?php
require('dbconnect.php'); // database connection
include 'counter.php';  //include counter file for the counter function

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; //grab the whole link from the url
$shorturl = basename($actual_link); //grab the last segment to get the short url code 

//function to for finding the corresponding original url
function findLongURL($conn, $shorturl) { 
    $q = "SELECT orig_url FROM urls WHERE new_url = '$shorturl'"; //SELECT for finding the corresponding original url
    $r = mysqli_query($conn, $q); //Run Query

    if (mysqli_num_rows($r) != 0) { //if a result is found
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) { //run through the array of results (there should only ever be 1)
            counter($conn, $shorturl); //run the counter function as the short url is being used
            header("Location: " .$row['orig_url']); //direct the user to the url of that is paired with the short url 
            exit(); //exit 
        }
    } else {
        echo "this url does not exist";  //output this url does not exist
    }
}

findLongURL($conn, $shorturl); //run function
?>