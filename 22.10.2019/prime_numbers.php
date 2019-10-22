<?php

function isPrime($number){
    if($number < 2) {
        echo 'This number is not valid';
    }   else {
        $divider = 2;
        while ($number % $divider != 0) {
            $divider++;
        }
        if($number == $divider) {
            echo $number.' is a prime number<br>';
        }   else {
            echo $number.' is not a prime number<br>';
        }
    }
}
// use function
isPrime(rand(0, 99));