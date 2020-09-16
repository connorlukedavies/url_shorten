<?php
require('dbconnect.php');
$shortUrl = $_POST['short_url'];

function howmanyvisits($conn, $shortUrl) {
    $q = "SELECT * FROM urls WHERE new_url = '$shortUrl'"; 
    $r = mysqli_query($conn, $q);

    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        $visit = $row['visits'];
    }
    header("Location: http://localhost/urlshort_backup_1/?visit=" . $visit);
}

howmanyvisits($conn, $shortUrl)
?>



