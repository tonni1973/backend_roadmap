<?php

    $first = [
        "firstName" => "Hose"
    ];

    $last = [
        "lastName" => "Black"
    ];

    $name = $first + $last;

    var_dump($name);

    var_dump($first != $last);