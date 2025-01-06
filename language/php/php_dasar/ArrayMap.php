<?php

    $bio = array(
        "firstName" => "hose",
        "lastName" => "black"
    );


    var_dump($bio['lastName']);

    $bio2 = [
        "firstName" => "hose",
        "lastName" => "black",
        "alamat" => [
            "RT" => 3,
            "RW" => 1
        ]
    ];

    echo($bio2["alamat"]["RW"]);
