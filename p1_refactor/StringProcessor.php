<?php

class StringProcessor {

    private $stringIn;

    public function __construct($stringIn) {
        $this->stringIn = $stringIn;
    }

    public function isPalindrome() {
        # Remove Special Characters
        $specialChars = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')'];
        $result = str_replace($specialChars, "", $this->stringIn);
    
        if ($result == strrev($result)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function vowelCount() {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;
    
        # Convert string to array
        $strArray = str_split($this->stringIn, 1);
    
        # Iterate over both arrays and compare values, increment vowel count
        foreach($strArray as $letter) {
            foreach($vowels as $vowel) {
                if ($vowel == $letter) {
                    $count++;
                }
            }
        }
        
        return $count;
    }
}