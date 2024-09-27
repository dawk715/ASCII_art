<?php
function drawRoundedRectangle($size) {
    // Ensure the size is odd and at least 5
    if ($size < 5 || $size % 2 == 0) {
        echo "Please provide an odd number greater than or equal to 5.";
        return;
    }

    // Calculate the center position
    $center = ($size - 1) / 2;

    // Loop through each row
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            // Top-left corner
            if ($i == 0 && $j == 0) {
                echo "/";
            }
            // Top-right corner
            elseif ($i == 0 && $j == $size - 1) {
                echo "\\";
            }
            // Bottom-left corner
            elseif ($i == $size - 1 && $j == 0) {
                echo "\\";
            }
            // Bottom-right corner
            elseif ($i == $size - 1 && $j == $size - 1) {
                echo "/";
            }
            // Top and bottom edges
            elseif ($i == 0) {
                echo " -";
            }
            elseif ($i == $size - 1) {
                echo " _";
            }
            // Left and right edges
            elseif ($j == 0 || $j == $size - 1) {
                echo "| ";
            }
            // Center of the square
            elseif ($i == $center && $j == $center) {
                echo "+ ";
            }
            // Inside of the square
            else {
                echo "  ";
            }
        }
        echo "<br>";
    }
}

// Set the size of the square
$size = 7; // Example: change this value to test with different sizes
drawRoundedRectangle($size);
?>