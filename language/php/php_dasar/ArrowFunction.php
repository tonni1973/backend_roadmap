<?php 
    // arrow function bisa langsung akses variable yang di luar closure
    $firstName = "Davion";
    $lastName = "The Dragon Knight";

    $sayHello = fn() => "Hello my name $firstName $lastName" . PHP_EOL;
    
    echo $sayHello();