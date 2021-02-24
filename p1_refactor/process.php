<?php

require 'StringProcessor.php';

session_start();

$stringIn = strtolower($_POST['stringIn']);

$stringProcessor = new StringProcessor($stringIn);

// $isPalindrome = isPalindrome($stringIn);
// $vowelCount = vowelCount($stringIn);


$_SESSION['results'] = [
    'stringIn' => $stringIn,
    'isPalindrome' => $stringProcessor->isPalindrome(),
    'vowelCount' => $stringProcessor->vowelCount()
];

header('Location: index.php');