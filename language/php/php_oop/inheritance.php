<?php
    require_once "data/Manager.php";

    $manager = new Manager();
    $manager->name = "Davion";
    $manager->sayHello("Mirana");

    $vicePresident = new VicePresident();
    $vicePresident->name = "Mirana";
    $vicePresident->sayHello("Davion");