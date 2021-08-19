<?php

if(isset($_POST['add'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $sum = $number1 + $number2;

    echo "The answer is: ".$sum;
};

if(isset($_POST['minus'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $minus = $number1 - $number2;

    echo "The answer is: ".$minus;
};

if(isset($_POST['multiply'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $multiply = $number1 * $number2;

    echo "The answer is: ".$multiply;
};

if(isset($_POST['divide'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $divide = $number1 / $number2;

    echo "The answer is: ".$divide;
};

?>