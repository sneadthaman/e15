<?php

session_start();

$stringIn = $_POST['stringIn'];
$isPalindrome = true;
$vowelCount = 5;

$_SESSION['results'] = [
    'stringIn' => $stringIn,
    'isPalindrome' => $isPalindrome,
    'vowelCount' => $vowelCount
];

header('Location: index.php');