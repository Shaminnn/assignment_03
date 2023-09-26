<?php

// Create an array containing the numbers 1 to 10
$numbers = range(1, 10);
function removeEvenNumbers($numbers) {
    // Initialize an empty array to store the result
    $result = [];

    foreach ($numbers as $number) {
       
        if ($number % 2 != 0) {
            // Add the odd number to the result array
            $result[] = $number;
        }
    }

    
    print_r($result);
}

removeEvenNumbers($numbers);
?>