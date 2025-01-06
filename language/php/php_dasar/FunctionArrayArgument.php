<?php

    function sumAll(array $values): string 
    {
        $hasil = 0;
        foreach($values as $value){
            $hasil += $value;
        }

        return "total " . implode("+", $values) . " = $hasil " . PHP_EOL;
    }

    function minAll(...$values): string 
    {
        $hasil = 20;
        foreach($values as $value){
            $hasil -= $value;
        }

        return "total " . implode("+", $values) . " = $hasil " . PHP_EOL;
    }

    echo sumAll([1, 2, 3, 4, 5]);
    $values = [1, 2, 3, 4, 5];

    // echo minAll($values); //error karena paramer bukan array

    // pakailah ini
    echo minAll(...$values);
