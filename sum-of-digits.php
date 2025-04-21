<?php
// Input number
$number = 1234;
$sum = 0;

// Store original number for display
$temp = $number;

// Loop to extract digits and calculate sum
while ($number > 0) {
    $digit = $number % 10;      // Get last digit
    $sum = $sum + $digit;       // Add digit to sum
    $number = (int)($number / 10); // Remove last digit
}

// Output result
echo "The sum of digits of $temp is: $sum";
?>
