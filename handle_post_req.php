<?php

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    // collect value of input field
//    $name = 'Hello ' . $_POST['fname'] || $_POST['fname'] === '';
//    if (empty($name)) {
//        echo "Name is empty";
//    } else {
//        echo $name;
//    }
//}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $greeting = 'Hello ';
    $age = $_POST['age'];
    if
        (empty($age)) {
        echo 'Please type a valid input for age';
        exit();
    }
    elseif($age < 18) {
        echo "You are under 18";
    } {
        echo $greeting . 'you are ' . $age . ' so you are 18 or over';
    }
}