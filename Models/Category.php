<?php

 class Category {

  public $name;
  public $products;

  function __construct(string $_name) {
    
    $this->name = $_name;
  }

  public function addProduct($array, $item) {
    if (!isset($this->products[$array]) || !in_array($item, $this->products[$array]) ) {
      $this->products[$array][] = $item;
    }
  }
 }