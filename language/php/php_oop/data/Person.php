<?php 

class Person {
    const AUTHOR = "Programmer Zaman Now";
    // propertis dan type data declaration
    //  default value 
    var string $name = "Tanpa Nama";
    // nullable
    var ?string $address = null;
    var string $country;


    // kontruktor di php
    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }


    function sayHello(?string $name){
        if(is_null($name)){
            echo "Hello World, $this->name" . PHP_EOL;
        } else {
            echo "Hello World, $name" . PHP_EOL;
        }
    }

    function info(){
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }

    // destructor adalah function yang akan dipanggil ketika object dihapus

    function __destruct()
    {
        echo "Object person {$this->name} is destroyed" . PHP_EOL;
    }
}
