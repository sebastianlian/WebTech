<?php
	echo "<h2>Your answers to the survey questions</h2>";
	
	echo "Your favorite website: " . $_POST["website"] . "<br>";
	echo "Your favorite color: " . $_POST["favcolor"] . "<br>";
	echo "Your least favorite color: " . $_POST["leastcolor"] . "<br>";
	echo "Your favorite day: " . $_POST["day"] . "<br>";
	echo "Your lucky number: " . $_POST["lucky"] . "<br>";
	echo "Your height: " . $_POST["feet"] . " feet " .  $_POST["inches"] . " inches" . "<br>";
	echo "Your satisfaction with this web site: " . $_POST["satisfaction"] . "<br>";
	echo "Your opinion about classes: " . $_POST["morning"] . $_POST["evening"] . "<br>";
	echo "Your opinion about classes: " . $_POST["morning"] . $_POST["evening"] . "<br>";
	echo "Comments: " . $_POST["comment"] . "<br>";
?>