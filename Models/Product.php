<?php

  class Product {

    public $img;
    public $name;
    public $description;
    public $category;
    public $price;
    public $type;
    
    function __construct(string $_img, string $_name, string $_description, string $_category, float $_price, string $_type) {
    
    $this->img = $_img;
    $this->name = $_name;
    $this->description = $_description;
    $this->category = $_category;
    $this->price = $_price;
    $this->type = $_type;
  }
}