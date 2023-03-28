<?php
session_start();

// Display the username variable stored in the session data by
// sesspage1.php

if (isset($_SESSION['username'])) {
    echo '<p>Hello, ' . $_SESSION['username'] . '</p>';
} else {
    echo '<p>Welcome, stranger!</p>';
}
echo '<a href="sesspage3.php">'
    . '<button type = "button">Next Page</button>'
    . '</a>';
