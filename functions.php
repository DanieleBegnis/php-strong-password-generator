<?php
function generatePassword($passwordLength, $passwordChars, $passwordRepetition) {
    $password = '';
    while(strlen($password) < $passwordLength) {
        $randomIndex = rand(0, count($passwordChars) - 1);

        if($passwordRepetition) {
            $password .= $passwordChars[$randomIndex];
        } else {
            if(!str_contains($password, $passwordChars[$randomIndex])) {
                $password .= $passwordChars[$randomIndex];
            }
        }
    }
    
    return $password;
}

function getAvailableChars($userSelectionChars) {
    $lowercaseChars = range('a', 'z');
    $uppercaseChars = range('A', 'Z');
    $numbers = range(0, 9);
    $specialChars = range('-', '!');

    if(empty($userSelectionChars)) {
        return array_merge($lowercaseChars, $uppercaseChars, $numbers, $specialChars);
    }

    $allChars = [];

    if(in_array('chars', $userSelectionChars)) {
        $allChars = array_merge($allChars, $lowercaseChars, $uppercaseChars);
    }

    if(in_array('numbers', $userSelectionChars)) {
        $allChars = array_merge($allChars, $numbers);
    }

    if(in_array('special-chars', $userSelectionChars)) {
        $allChars = array_merge($allChars, $specialChars);
    }

    return $allChars;
}
?>