<?php

session_start();

$stringIn = strtolower($_POST['stringIn']);
$isPalindrome = isPalindrome($stringIn);
$vowelCount = vowelCount($stringIn);

function isPalindrome($stringIn) {
    # Remove Special Characters
    $specialChars = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')'];
    $result = str_replace($specialChars, "", $stringIn);

    if ($result == strrev($result)) {
        return true;
    } else {
        return false;
    }
};

function vowelCount($stringIn) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

    # Convert string to array
    $strArray = str_split($stringIn, 1);

    # Iterate over both arrays and compare values, increment vowel count
    foreach($strArray as $letter) {
        foreach($vowels as $vowel) {
            if ($vowel == $letter) {
                $count++;
            }
        }
    }
    
    return $count;
};

$_SESSION['results'] = [
    'stringIn' => $stringIn,
    'isPalindrome' => $isPalindrome,
    'vowelCount' => $vowelCount
];

header('Location: index.php');