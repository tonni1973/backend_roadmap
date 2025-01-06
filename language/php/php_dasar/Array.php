<?php
    $values = array(1, 2, 3, 4, 5);

    var_dump($values);

    $names = ["Nad", "Tonn", "Noy"];

    var_dump($names);

    // Operasi Array
    // menambah array pada posisi akhir
    $names[] = "Tonni";

    var_dump($names);

    // menghapus data array

    unset($names[1]);

    var_dump($names);

    echo count($names);


