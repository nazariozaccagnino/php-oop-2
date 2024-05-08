<?php
class Product
{
    public string $name;
    public string $img;
    public string $price;

    public function __construct($name, $img, $price){
        $this->name = $name;
        $this->img = $img;
        $this->price = $price;
    }
    public function printCard($item)
    {
        extract($item);
        include __DIR__ . '/../Views/card.php';
    }
}
