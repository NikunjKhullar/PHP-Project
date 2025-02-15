<?php
	$number = 153;
	$numLength = strlen((string)$number);
	$sum = 0;
	$temp = $number;
	while ($temp > 0) {
    		$digit = $temp % 10;           
    		$sum += pow($digit, $numLength); 
    		$temp = (int)($temp / 10);     
	}
	if ($sum == $number) {
    		echo "$number is an Armstrong number.";
	} else {
    		echo "$number is not an Armstrong number.";
	}

	echo "<br><br>";
	echo "Executed by Nikunj Khullar(0221BCA131)(2220100306)";
?>
