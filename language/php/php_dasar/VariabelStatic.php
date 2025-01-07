<?php

    function increment()
    {
        // variable local biasanya hanya ada ketika fungsinya berjalan, tetapi jika static maka variable tersebut akan terus ada
        static $counter = 1;
        
        echo "$counter" . PHP_EOL;
        $counter++;
    }

    increment();
    increment();
    increment();