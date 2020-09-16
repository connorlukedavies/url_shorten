<?php 
require('dbconnect.php'); // database connection
include 'random.php'; // include the random.php file so that the generateRandomString function can be used
$urlExistsCheck = generateRandomString(); // generates a random string for short url

// this function will check if the url generated already exists 
function newUrlExists($conn, $urlExistsCheck) {
    $q = "SELECT * FROM urls WHERE new_url = '$urlExistsCheck'"; // select query to check if short url is already in there
    $r = mysqli_query($conn, $q); // run the query
    
    if (mysqli_num_rows($r) != 0) { // if there are rows that match the database query then it means the string already exists
        while (mysqli_num_rows($r) != 0) { //while the query results rows are still above zero 
            $urlExistsCheck = null; //set urlExistsCheck to null
            $urlExistsCheck = generateRandomString(); //set urlExistsCheck a new random number
            $r = mysqli_query($conn, $q); //re run the query to see if it still exists
            return $urlExistsCheck; //return the urlExistsCheck value as we know its not already been used
        }
    } else {
        return $urlExistsCheck; //return the urlExistsCheck value as we know its not already been used
    }
}

newUrlExists($conn, $urlExistsCheck); // call the function

?>