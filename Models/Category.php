<?php

 class Category {

  public $name;
  public $products;
  public $icon;

  function __construct(string $_name, string $_icon) {
    
    $this->name = $_name;
    $this->icon = $_icon;
  }

  public function addProduct($item) {
    if (empty($this->products) || !in_array($item, $this->products) ) {
      $this->products[] = $item;
    } else {
      throw new Exception("Questo prodotto è già in catalogo");
    }
  }
 }