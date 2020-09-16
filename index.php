<?php 
    require_once('includes/header.php'); // this calls the header of the page
    include 'resultsDisplay.php'; //include the resultsDisplay file for the geturlcode() and getHits() functions 
    include 'formfiller.php'; // include the formfiller file for the formplaceholder() function
?>
<form action="urlshortener.php" method="POST" name="url_input" onsubmit="return validateForm();"> <!-- links to the js validation function on submit-->
    <p>Enter your Url:</p>
    <input type="text" placeholder="<?php formplaceholder($conn); ?>" name="orig_url" onkeyup="showHint(this.value)"><br> <!-- calls the formplaceholder function -->
    <p class="error" id="error"></p> <!-- this p tag is populated when a validation error is caught-->
    <p class="error" id="txtHint"></p>
    <input type="submit" value="Shorten">
</form>
<?php geturlcode(); ?> <!-- displays the new the short url with a link to it  -->

<br><br>
<button onclick="toggleStats()">Click here to view your hits</button> <!-- open the stats form -->


<form action="visits.php" method="POST" id="stats" name="url_stats" onsubmit="return validateshort()"><!-- links to the js validation function on submit-->
    <p>Enter short URL:</p>
    <input type="text" placeholder="insert here" name="short_url"><br>
    <?php getHits();?> <!-- displays how many hits the url has -->
    <p class="error" id="url_stats_error"></p> <!-- this p tag is populated when a validation error is caught-->
    <input type="submit" value="View Hits">
</form>

<script type="text/javascript" src="assets/js/validation.js"></script> <!-- links to the js validation script on submit-->
<script type="text/javascript" src="assets/js/visits.js"></script> <!-- links to the script that opens the stats form -->
<?php require_once('includes/footer.php');?> <!-- this calls the header of the page -->



