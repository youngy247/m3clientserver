<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = 'Hello ' . $_POST['fname'] || $_POST['fname'] === '';
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}

