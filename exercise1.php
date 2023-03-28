<?php

session_start();

//isset($_SESSION['visit_count'])
//    ? $_SESSION['visit_count']++
//    : $_SESSION['visit_count'] = 1;
//
//
// Output the visit count
//echo "You have visited this page " . $_SESSION['visit_count'] . " times.";

if (isset($_COOKIE['count'])) {
    $visits = $_COOKIE['count'] + 1;
} else {
    $visits = 1;
}

setcookie('count', $visits);

echo '<p>You have visited ' . $visits . ' times';