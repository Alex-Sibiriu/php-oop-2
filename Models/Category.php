<?php

 class Category {

  public $name;
  public $products;
  public $icon;

  function __construct(string $_name, string $_icon) {
    
    $this->name = $_name;
    $this->icon = $_icon;
  }

  public function addProduct($array, $item) {
    if (!isset($this->products[$array]) || !in_array($item, $this->products[$array]) ) {
      $this->products[$array][] = $item;
    }
  }
 }