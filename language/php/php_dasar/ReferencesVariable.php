<?php

    $name = "Mirana";

    // ini mengacu pada nama asli
    $otherName = &$name;

    $otherName = "Davion";

    echo "$otherName" . PHP_EOL;

    //pass by refernces

    function increment(int &$value)
    {
        $value++;
    }

    $counter = 1;
    increment($counter);
    increment($counter);

    echo "$counter" . PHP_EOL;


    // returning reference

    function &getValue(){
        static $value = 100;
        return $value;
    }

    $a = &getValue();
    $a = 200;


    $b = &getValue();
    echo $b;