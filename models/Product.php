<?php
class Product
{
    private $name;
    private $price;
    private $category_id;
    private $conn;
    public function __construct($conn, $name, $price,$category_id=1)
    {
        $this->conn = $conn;
        $this->name = $name;
        $this->price = $price;
        $this->category_id=$category_id;
    }
    public function save()
    {
        return $this->conn->prepare("
        INSERT INTO `products`(`name`, `price`,`category_id`)
        VALUES (:name,:price,:category_id)
        ")
        ->execute(['name'=>$this->name,'price'=>$this->price,
        'category_id'=>$this->category_id]);
    }
}
