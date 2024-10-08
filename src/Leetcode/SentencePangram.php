<?php

namespace App\Leetcode;

class SentencePangram{
    /**
     * Determines if a sentence is a pangram.
     * 
     * A pangram is a sentence that contains every letter of the alphabet at least once.
     * 
     * --work note:
     * 1. $alphabet: 
     *    - This variable holds all lowercase letters of the English alphabet.
     * 
     * 2. str_split($alphabet): 
     *    - Converts the string of the alphabet into an array of individual letters for easy iteration.
     * 
     * 3. strpos($sentence, $letter):
     *    - Checks if the current letter from the alphabet exists in the given sentence.
     *    - strpos returns the position of the first occurrence of the letter, or false if the letter is not found.
     * 
     * 4. Return Values:
     *    - If any letter is missing, the method immediately returns `false`.
     *    - If all letters are found, it returns `true`, confirming the sentence is a pangram.
     * -end note
     * 
     * @param string $sentence The input sentence to check.
     * @return bool True if the sentence is a pangram, false otherwise.
     */
    public function solution(string $sentence): bool
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyz'; // The 26 letters of the English alphabet
        
        // Split the alphabet into an array of individual letters
        foreach (str_split($alphabet) as $letter) {
            // Check if the current letter is missing from the sentence
            if (strpos($sentence, $letter) === false) {
                return false; // If any letter is missing, return false
            }
        }
        
        return true; // If all letters are found, return true
    }
}
