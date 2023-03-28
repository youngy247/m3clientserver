<?php

// Start the session
session_start();

// Check if the session variable for the visit count is set
if (isset($_SESSION['visit_count'])) {
    // Increment the visit count
    $_SESSION['visit_count']++;
} else {
    // Set the initial visit count to 1
    $_SESSION['visit_count'] = 1;
}

// Output the visit count
echo "You have visited this page " . $_SESSION['visit_count'] . " times.";

