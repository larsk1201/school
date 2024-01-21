<?php
// Array of users
	$user = [
		["name" => "Jan", "age" => 24, "gender" => "male"],
		["name" => "Willem", "age" => 14, "gender" => "male"],
		["name" => "Fred", "age" => 28, "gender" => "male"
		]
	];

	// 3 different ways of checking what's inside an array (for testing purposes only!)
	echo "<b><u style='color:blue;'>var_dump</u></b>" . "<br />";
	echo var_dump($user);

	echo "<b><u style='color:blue;'>var_export</u></b>" . "<br />";
	echo "<pre>";
	echo var_export($user);
	echo "</pre>";

	echo "<b><u style='color:blue;'>print_r</u></b>" . "<br />";
	echo "<pre>";
	echo print_r($user);
	echo "</pre>";


	/* -------------------------------------------------------------------------- */


	// Array_unshift - Adds an element to the beginning of the array. 
	// Note: All numerical array keys will be modified to start counting 
	// from zero while literal keys won't be touched.
	echo "<br />";
	echo "<b><u style='color:blue;'>array_unshift</u></b>" . "<br />";
	array_unshift($user, ["name" => "Truus", "age" => 17, "gender" => "female"]);
	echo "<pre>";
	echo var_dump($user);
	echo "</pre>";
	
	
	// Array_shift - Removes an element from the beginning of the array.
	// Note: All numerical array keys will be modified to start counting 
	// from zero while literal keys won't be touched.
	echo "<br />";
	echo "<b><u style='color:blue;'>array_shift</u></b>" . "<br />";
	array_shift($user);
	echo "<pre>";
	echo var_dump($user);
	echo "</pre>";

	// Array_push - Adds an element to the end of the array. 
	// Note: The length of array increases by the number of variables pushed.
	echo "<br />";
	echo "<b><u style='color:blue;'>array_push</u></b>" . "<br />";
	array_push($user, ["name" => "Miep", "age" => 22, "gender" => "female"]);
	echo "<pre>";
	echo var_dump($user);
	echo "</pre>";
	
	// Array_pop - Removes an element from the end of the array.
	// Note: If array is empty (or is not an array), NULL will be returned.
	echo "<br />";
	echo "<b><u style='color:blue;'>array_pop</u></b>" . "<br />";
	array_pop($user);
	echo "<pre>";
	echo var_dump($user);
	echo "</pre>";


	/* -------------------------------------------------------------------------- */


	// Array_splice - Removes the elements designated by offset and length from the input 
	// array and replaces them with the elements of the replacement array, if supplied.
	echo "<br />";
	$colors = ["red", "blue", "yellow", "green"];
	echo "<b><u style='color:blue;'>array_splice example 1</u></b>" . "<br />";
	array_splice($colors, 2);
	echo var_dump($colors);

	echo "<br />";
	$colors = ["red", "blue", "yellow", "green"];
	echo "<b><u style='color:blue;'>array_splice example 2</u></b>" . "<br />";
	array_splice($colors, 1, -1);
	echo var_dump($colors);

	echo "<br />";
	$colors = ["red", "blue", "yellow", "green"];
	echo "<b><u style='color:blue;'>array_splice example 3</u></b>" . "<br />";
	echo count($colors);
	array_splice($colors, 1, count($colors), "orange");
	echo count($colors);
	echo var_dump($colors);

	echo "<br />";
	$colors = ["red", "blue", "yellow", "green"];
	echo "<b><u style='color:blue;'>array_splice example 4</u></b>" . "<br />";
	array_splice($colors, -1, 1, array("black", "orange"));
	echo var_dump($colors);

	echo "<br />";
	$colors = ["red", "blue", "yellow", "green"];
	echo "<b><u style='color:blue;'>array_splice example 5</u></b>" . "<br />";
	array_splice($colors, 3, 0, "purple");
	echo var_dump($colors);
	echo "<br />";


	/* -------------------------------------------------------------------------- */


	// Array_count_values - Returns an associative array of values from array as keys 
	// and their count as value.
	echo "<br />";
	$colors2 = ["red", "blue", "yellow", "green", "green"];
	echo "<b><u style='color:blue;'>array_count_values</u></b>" . "<br />";
	echo "<pre>";
	echo print_r(array_count_values($colors2)) . "<br />";
	echo "</pre>";

	// Array_sum - Returns the sum of values in an array
	$numbers = [2, 4, 6, 8];
	echo "<b><u style='color:blue;'>array_sum</u></b>" . "<br />";
	echo array_sum($numbers) . "<br />";

	// Array_keys - Returns the keys (numeric and string) from the array.
	$keys = [0 => 100, "color" => "red"];
	echo "<b><u style='color:blue;'>array_keys example 1</u></b>" . "<br />";
	echo "<pre>";
	print_r(array_keys($keys));
	echo "</pre>";

	$keys2 = [
		"color" => ["blue", "red", "green"],
		"size"  => ["small", "medium", "large"]
	];
	echo "<b><u style='color:blue;'>array_keys example 2</u></b>" . "<br />";
	echo "<pre>";
	print_r(array_keys($keys2));
	echo "</pre>";

// Array_reverse - Returns a new array with the order of the elements reversed.
	$colors3 = ["purple", "blue", "yellow", "green", "red"];
	echo "<b><u style='color:blue;'>array_reverse</u></b>" . "<br />";
	echo "<pre>";
	echo print_r(array_reverse($colors3)) . "<br />";
	echo "</pre>";

	// Array_flip - Keys from array become values and values from array become keys.
	$colors3 = ["purple", "blue", "yellow", "green", "red"];
	echo "<b><u style='color:blue;'>array_flip</u></b>" . "<br />";
	echo "<pre>";
	echo print_r(array_flip($colors3)) . "<br />";
	echo "</pre>";

	// In_array - Checks if the requested element (needle) is present in the array (haystack).
	$colors3 = ["purple", "blue", "yellow", "green", "red"];
	if (in_array("red", $colors3))
	{
		echo "The color red is in the array!";
	}
	else
	{
		echo "Error: Color not found!"; 
	}

	// Sort
	echo "<br />";
	$numbers = [10, 2, 5, 3, 1];
	sort($numbers);

	foreach($numbers as $number)
	{
		echo $number . " ";
	}
