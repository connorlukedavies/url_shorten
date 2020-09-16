<?php

function generateRandomString() { //create function and define the length variable as 7
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // define what characters can be used
    $charactersLength = strlen($characters); 
    $randomString = ''; //set random string to nothing
    for ($i = 0; $i < 7; $i++) { // for loop to go through each position and assign it a character
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString; // return the random string
}


?>