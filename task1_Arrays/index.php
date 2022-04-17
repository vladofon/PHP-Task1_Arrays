<?php

	function printArrays($first, $second, $message) {
		echo "<h3>".$message."</h3>";
		print_r($first);
		echo "<br />";
		print_r($second);
	}

	function isOdd($number) {
		return $number % 2 == 1;
	}

	function filterOdd($numbers) {
		$result = array();
		foreach ($numbers as $key => $number) {
			if(isOdd($number)) $result[] = $number;
		}
		return $result;
	}

	// init arrays
	$indexArray = array(5,4,2,6,7,1,9,2,0);
	$assocArray = array(
		"first" => 8, "second" => 2, "third" => 5, 
		"fourth" => 6, "fifth" => 7, "sixth" => 1
	);

	// print arrays
	printArrays($indexArray, $assocArray, "Unsorted arrays:");

	// sort arrays
	sort($indexArray);
	sort($assocArray);
	printArrays($indexArray, $assocArray, "Sorted in asc order:");

	rsort($indexArray);
	rsort($assocArray);
	printArrays($indexArray, $assocArray, "Sorted in desc order:");

	// min & max values
	printArrays(min($indexArray), min($assocArray), "Minimal number in arrays:");
	printArrays(max($indexArray), max($assocArray), "Maximal number in arrays:");

	// filter odd numbers in arrays
	printArrays(filterOdd($indexArray), filterOdd($assocArray), "Only odd numbers:");

	// sum of all numbers in arrays
	printArrays(array_sum($indexArray), array_sum($assocArray), "Numbers sum:");

?>