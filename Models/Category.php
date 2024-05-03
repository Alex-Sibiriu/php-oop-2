<?php

 class Category {

  public $name;
  public $products;

  function __construct(string $_name) {
    
    $this->name = $_name;
  }

  public function addProduct($item) {
    $this->products[] = $item;
  }
 }