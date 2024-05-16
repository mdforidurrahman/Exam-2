<?php

// Write a PHP program that takes an array of strings as input. Your program should iterate over each string in the array and perform the following operations:

    
    
// Count the number of vowels (a, e, i, o, u) in each string.
// 2. Reverse each string.
// 3. Print the original string and the modified strings along with their vowel counts.
    
    
// You must use this array of strings:
// $strings = ["Hello", "World", "PHP", "Programming"];
    
    
// Your Output must look like this:
// Original String: Hello, Vowel Count: 2, Reversed String: olleH
// Original String: World, Vowel Count: 1, Reversed String: dlroW
// Original String: PHP, Vowel Count: 0, Reversed String: PHP
// Original String: Programming, Vowel Count: 3, Reversed String: gnimmargorP



    $strings = ["Hello", "World", "PHP", "Programming"];

    foreach ($strings as $string) {
        $vowelCount = 0;
        $reversedString = strrev($string);
        foreach (str_split($string) as $char) {
            if (in_array(strtolower($char), ['a', 'e', 'i', 'o', 'u'])) {
                $vowelCount++;
            }
        }
        echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n"; 
    }