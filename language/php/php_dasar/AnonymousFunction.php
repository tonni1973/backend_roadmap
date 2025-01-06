<?php

    $sayHello = function(string $name){
        echo "Hello $name" . PHP_EOL;
    };

    $sayHello("Riki");

    // anonymous function sebagai argumen

    function sayGoodBye(string $name, $filter)
    {
        $finalName = $filter($name);
        echo "Good Bye $finalName" . PHP_EOL;
    }

    sayGoodBye("Davion", function(string $name){
        return strtoupper($name);
    });

    // akses variable global menggunakan anonymous function

    $firstName = "Davion";
    $lastName = "Mirana";

    $katakanHallo = function() use($firstName, $lastName){
        echo "Hallo nama saya $firstName $lastName";
    };

    $katakanHallo();
