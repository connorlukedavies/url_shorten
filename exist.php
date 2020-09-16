<?php
// Array with names
require('dbconnect.php');

$q = "SELECT * FROM urls WHERE orig_url = '" . $_GET['q'] . "'";
$r = mysqli_query($conn, $q);
//if statement to check the stock levels, anything with a stock level below 1 will not be shown to the customer
if (mysqli_num_rows($r) > 0) {
echo "this url already exists";
}
?>
