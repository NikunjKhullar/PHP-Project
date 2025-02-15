<?php
	function findMax($arr){
		$max=$arr[0];
		foreach($arr as $val){
			if($val>$max){
				$max=$val;
			}
		}
		return $max;
	}
	echo findMax([1,5,2,8,3]);
	echo "<br><br>";
	echo "Executed by Nikunj Khullar(0221BCA131)(2220100306)";
?>
