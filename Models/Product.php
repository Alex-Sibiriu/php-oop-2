<?php

  class Product {

    public $name;
    public $img;
    public $category;
    public $price;
    public $type;
    
    function __construct(string $_name, string $_img, string $_category, float $_price, string $_type) {
    
    $this->name = $_name;
    $this->img = $_img;
    $this->category = $_category;
    $this->price = $_price;
    $this->type = $_type;
  }
}