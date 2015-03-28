<?php
// this is where you get the ip
$ip = $_SERVER['REMOTE_ADDR'];

// this is where you include the code that gets the country
// you can find the code for this file on the link below    
include("geoiploc.php");


$country_code=getCountryFromIP($ip, "code");


// this is where you create the variable that get you the name of the country
$country = getCountryFromIP($ip, " NamE ");
echo "Hello there!<br>This is Gaurav Parmar and I welcome you to my website.<br>Your machine's IP is : <b>$ip</b><br>Your visiting country is : <b>$country</b><br>Your country code is : <b>$country_code</b>";
?>