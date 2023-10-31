<?php
	echo "<h2>Thank you for taking the survey</h2><br>";
	echo "<h3>Below are your answers to the survey questions:</h3><br>";
	
	echo "<h2>1. Demographics Information</h2><br>";
	echo "Your gender: " . '<b>' . $_POST["gender"] . '</b>' . "<br>";
	echo "Your age: " . '<b>' . $_POST["age"] . '</b>' ."<br>";
	echo "Your level: " . '<b>' . $_POST["level"] . '</b>' . "<br>";
	echo "Your school: " . '<b>' . $_POST["school"] . '</b>' . "<br>";
	
	echo "<h2>2. How do you evaluate your security knowledge:</h2><br>";
	echo "You chose: " . '<b>' . $_POST["know"] . '</b>' . "<br>";
	
	echo "<h2>3. Have your computers been affected by virus before:</h2><br>";
	echo "You responded: " . '<b>' . $_POST["virus"] . '</b>' . "<br>";
	
	echo "<h2>4. What anti-virus software do you usually use:</h2><br>";

	if (isset($_POST["norton"]) && $_POST["norton"] == "yes") {
		echo '<b>' . "Norton " . '</b>';
	}
	if (isset($_POST["mcafee"]) && $_POST["mcafee"] == "yes") {
		echo '<b>' . "McAfee " . '</b>';
	}
	if (isset($_POST["avast"]) && $_POST["avast"] == "yes") {
		echo '<b>' . "Avast " . '</b>';
	}
	if (isset($_POST["kasperski"]) && $_POST["kasperski"] == "yes") {
		echo '<b>' . "Kasperski " . '</b>';
	}
	if (isset($_POST["other"]) && $_POST["other"] == "yes") {
		echo '<b>' . "Other: " . '</b>' . '<b>' . $_POST["othersoft"] . '</b>';
	}
	
	echo "<br>";
	
	echo "<h2>5. You rated:</h2><br>";
	echo "I know how to create a strong password: " . '<b>' . $_POST["password"] . '</b>' . "<br>";
	echo "I know how to remove malware from my computer: " . '<b>' . $_POST["malware"] . '</b>' . "<br>";
	echo "I know how to secure my wireless network at home: " . '<b>' . $_POST["network"] . '</b>' . "<br>";
?>