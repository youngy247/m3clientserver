<?php

session_start();

isset($_SESSION['visit_count'])
    ? $_SESSION['visit_count']++
    : $_SESSION['visit_count'] = 1;


// Output the visit count
echo "You have visited this page " . $_SESSION['visit_count'] . " times.";

