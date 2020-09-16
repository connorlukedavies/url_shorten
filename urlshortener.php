<?php
//includes and requires
require('dbconnect.php'); // db connection
include 'newUrlCheck.php'; //check if the url exists file

//variables
$longUrl = $_POST['orig_url']; //get the long url from the form submit
$visits = 0; // set the visits to default as 0
$newUrl = newUrlExists($conn, $urlExistsCheck); //generate the new url 

//function: this function inserts the old and new url into the database
function createURL($conn, $longUrl, $newUrl, $visits) { //creation of function with the parameters it will use
    $q = "SELECT * FROM urls WHERE orig_url = '$longUrl'";  // select for if the long url exists in the database
    $r = mysqli_query($conn, $q); // run the query
    
    if (mysqli_num_rows($r) != 0) {
        //THIS NEEDS FIXING
        echo "<br><br>this url has been used before, try another"; 
    } else { 
        $q = "INSERT INTO urls (orig_url, new_url, visits) VALUES ('$longUrl', '$newUrl', '$visits')"; //insert new url, old url and visits into the database
        $r = mysqli_query($conn, $q); // run query
        if ($r) { //if the query ran fine
            header("Location: http://localhost/urlshort_backup_1/?code=" . $newUrl); //redirect the user to the index page with the new url code in the url
        } else {
            echo '<p>' . mysqli_error($conn) . '</p>'; //output errors if the insert didn't work
        }
    }
}
createURL($conn, $longUrl, $newUrl, $visits); // run function
?>