<?php

    function sayHello(string $name, $filter): string 
    {
        $finalName = $filter($name);

        return "Hello $finalName" . PHP_EOL;
    }

    echo sayHello("Tonni", "strtoupper");