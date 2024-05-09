<?php
include_once __DIR__ . '/Product.php';
class Dogs extends Product
{
    
<<<<<<< HEAD
    public function __construct($id, $name, $weight, $price, $img, $category)
    {
        parent::__construct($id, $name, $weight);
        


=======
    public function __construct($id, $name, $weight, $price, $img, $category) {
>>>>>>> 51cc19e37a9a3d259bc1199595cc0120461f338a
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
