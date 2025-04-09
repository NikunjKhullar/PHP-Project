<?php
// Input string
$str = "Hi, my name is Nikunj";

// Convert the string to lowercase for uniformity
$str = strtolower($str);

// Initialize vowel count
$vowelCount = 0;

// Define vowels
$vowels = array('a', 'e', 'i', 'o', 'u');

// Loop through each character in the string
for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], $vowels)) {
        $vowelCount++;
    }
}

// Print the number of vowels
echo "Number of vowels in the string: $vowelCount";
echo "<br><br>";
echo "Code executed by Nikunj Khullar(0221BCA131)";
?>