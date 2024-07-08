<?php

$celsius = 32;
$fahrenheit = ($celsius * 9/5) + 32;

printf("32 degrees Celsius is equal to %.2f degrees Fahrenheit.", $fahrenheit);

$age = 30;

if($age >= 18 && $age < 65){
    print("Eligible");
}else{
    print("Not Eligible");
}