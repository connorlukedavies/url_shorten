<?php
//this function is made to get the short url from the url
function geturlcode() {
    if (isset($_GET['code'] )) { //if $_GET['code'] is in the url 
        $url = $_GET['code']; // assign the value of $_GET['code'] to $url
        echo '<br>Here is your new url: <a href="http://localhost/urlshort_backup_1/' . 
        $url . '" target="_blank" class="newlink">' . $url . '</a>'; // here is the link using the new url
    }
}

//this function is made to get the visits from the url
function getHits() { 
    if (isset($_GET['visit'])) {  //if $_GET['visit'] is in the url 
        $hits = $_GET['visit']; // assign $hits the value $_GET['visit']
        echo '<br>Your short url has been used ' . $hits . ' many times'; // output the value
    }
}
?>