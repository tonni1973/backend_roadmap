<?php

class Product 
{
    protected string $name;
    private int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;       
    }

    public function getName() : String {
        return $this->name;
    }

    public function getPrice() : String{
        return $this->price;
    }
}

class ProductDummy extends Product
{
    public function getInfo() : string{
        return $this->name;
    }
}
