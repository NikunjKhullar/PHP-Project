<?php
	function fibonacci($n){

		$a=0;
		$b=1;
		for($i=0;$i<$n;$i++){
			echo $a." ";
			$temp=$a+$b;
			$a=$b;
			$b=$temp;
		}          
	}
	fibonacci(10);

	echo "<br><br>";
	echo "Executed by Nikunj Khullar(0221BCA131)(2220100306)";
?>

