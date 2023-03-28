<?php
// Start the session
session_start();

// Delete the PHPSESSID cookie
setcookie('PHPSESSID', '', time() - 3600, '/');

// Unset the session ID
unset($_COOKIE['PHPSESSID']);

// Exit the script
exit();

// Redirect the browser to the current URL without the PHPSESSID cookie
header('Location: ' . $_SERVER['REQUEST_URI']);
