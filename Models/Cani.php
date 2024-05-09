<?php
include_once __DIR__ . '/Product.php';
class Dogs extends Product
{
    
    public function __construct($id, $name, $weight, $price, $img, $category) {
    }
    public function formatItem()
    {
        $item = [
            'name' => $this->name,
            'weight' => $this->weight,
            'price' => $this->price,
            'img' => $this->img,
            'category' => $this->category
        ];
        return $item;
    }


}
