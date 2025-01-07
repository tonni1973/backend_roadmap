<?php 

    require_once "data/Person.php";

    $person = new Person("Kunkka", "Atlantis");
    // var_dump($person);

    $person->name = "Addrew";

    // error karena ada type declaration
    // $person->name = [];

    $person->sayHello(null);

    // cara akses constan
    echo Person::AUTHOR . PHP_EOL;

    $person->info();
