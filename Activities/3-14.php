<?php
	echo "<h1>Thank you for your registration!</h1>";
	echo "<h2>Your personal information:</h2>";
	
	echo "Your student ID: " . $_POST["StudentID"] . "<br>";
	echo "Your email: " . $_POST["Email"] . "<br>";
	echo "Your first name: " . $_POST["FirstName"] . "<br>";
	echo "Your last name: " . $_POST["LastName"] . "<br>";
	echo "Your phone number: " . $_POST["PhoneNumber"] . "<br>";
	echo "Your street: " . $_POST["Street"] . "<br>";
	echo "Your city: " . $_POST["City"] . "<br>";
	echo "Your state: " . $_POST["State"] . "<br>";
	echo "Your zip code: " . $_POST["ZipCode"] . "<br>";
	echo "Your level: " . $_POST["Level"] . "<br>";
	
	echo "<h2>Your IT preferences:</h2>";
	
	if (isset($_POST["ownComputer"]) && $_POST["ownComputer"] == "yes") {
		echo "You own a computer.<br>";
	} else {
		echo "You did not answer this question.<br>";
	}
	
	echo "You use the computer " . $_POST["time"] . " a day.<br>";
	
	echo "You usually use the following web browser(s):<br>";
	if (isset($_POST["firefox"]) && $_POST["firefox"] == "yes") {
		echo "Firefox ";
	}
	if (isset($_POST["chrome"]) && $_POST["chrome"] == "yes") {
		echo "Chrome ";
	}
	if (isset($_POST["safari"]) && $_POST["safari"] == "yes") {
		echo "Safari ";
	}
	echo "<br>";
	
	echo "Your major concentration is " . $_POST["major"] . ".<br>";
?>