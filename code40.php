<?php
	function factorial($n) {
    		if ($n == 0 || $n == 1) return 1; // Base case
    		return $n * factorial($n - 1); // Recursive call
	}

	$number = 5;
	echo "Factorial of $number is: " . factorial($number);
	echo "<br><br>";
	echo "Code executed by Nikunj Khullar(0221BCA131)(2220100306)";
?>