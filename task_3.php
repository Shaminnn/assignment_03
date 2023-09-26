<?php
$grades = [85, 92, 78, 88, 95];
function sortDescending($grades) {
    // Sort the grades array in descending order
    rsort($grades);

    print_r($grades);
}
sortDescending($grades);
?>