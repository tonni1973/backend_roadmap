<?php

    $name = "Yunero"; // global scope
    $ngaran = "Mirana";

    function sayHello(){
        // return $name; error function tidak bisa akses variable global
        $nama = "Davion"; // local scope

        // cara untuk akses variable global
        global $name;
        echo $name . PHP_EOL;

        // menggunakan $GLOBALS
        echo $GLOBALS['ngaran'];
    }

    // echo $nama; // tida bisa akses variable local

    sayHello();