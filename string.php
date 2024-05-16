<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Counting the number of vowels
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string, $matches);

    // Reversing the string
    $reversedString = strrev($string);

    // Printing the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>