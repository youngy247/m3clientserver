<?php
session_start();

setcookie('PHPSESSID', '', -3600);

echo '<pre';
echo 'PHPSESSID: ' . $_COOKIE['PHPSESSID'];
echo '</pre>';

// Remove all session variables

session_unset();

// End the session

session_destroy();