<?php

    function sayHello(string $name, callable $filter)
    {
        $finalName = call_user_func($filter, $name);
        echo "Hello $finalName" . PHP_EOL;
    }

    sayHello("Davion", function($name){
        return strtoupper($name);
    });

    sayHello("Mirana", fn($name) => strtolower($name));

    sayHello("Yunero", "strtoupper");
    sayHello("Magina", "strtolower");

