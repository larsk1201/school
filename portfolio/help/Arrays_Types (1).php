<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Arrays!</title>
	<style>
		table,
		td,
		tr {
			border: solid purple 2px;
			font-size: 16pt;
		}

		p {
			margin: 0;
			margin-bottom: 4px;
			margin-top: 2px;

		}
	</style>
</head>

<body>
	<?php

	//Numeric Array
	$numArray = array(
		"Test1",
		"Test2",
		"Test3"
	);

	$numArray = [
		"Test1",
		"Test2",
		"Test3"
	];

	$numArray[0] = "Test1";
	$numArray[1] = "Test2";
	$numArray[2] = "Test3";


	//Printing a numeric array(With, for example, a table)
	echo "<table>";
	for ($x = 0; $x < count($numArray); $x++) {
		echo "<tr><td>";
		echo "Index #" . $x . " contains";
		echo "</td><td>";
		echo $numArray[$x];
		echo "</td></tr>";
	}
	echo "</table>";
	echo "<br><br><br><br>";

	//Associative Array
	$assocArray = [
		"Name" => "Sint-Nicolaas",
		"NickName" => "Sinterklaas",
		"Age" => "Over 9000!",
		"Transport" => "Horse"
	];

	//Printing an associative array 
	foreach ($assocArray as $element) {
		echo $element . "<br>"; //Or with <p>
	}
	echo "<br><br><br><br>";

	//Printing an associative array with keys and values
	foreach ($assocArray as $key => $value) {
		echo "<p>The key is: " . $key . ". The value associated with the key is: " . $value . ".</p>";
	}
	echo "<br><br><br><br>";

	//Multi-dimensional array
	$multi = [
		["...", "O", "X"],
		["X", "O", "O"],
		["...", "...", "X"]
	];

	//Accessing an element in the Multi-dimensional array
	echo "Index (0,2) contains: " . $multi[0][2];

	echo "<br><br><br><br>";

	//Printing the 2d array
	$colCounter = 0;
	foreach ($multi as $row) {
		foreach ($row as $element) {
			echo "[" . $element . "]";
		}
		echo "<br>";
	}
	?>

</body>

</html>