<?php
class Manager{
    var string $name;

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager{
}