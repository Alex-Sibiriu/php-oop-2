<?php 

class Food extends Product {

  public $typology;
  public $taste;
  public $quantity;

  function __construct(string $_name, string $_description, string $_category, float $_price, string $_type, string $_typology, string $_taste, string $_quantity) {
    
    parent::__construct($_name, $_description, $_category, $_price, $_type);

    $this->typology = $_typology;
    $this->taste = $_taste;
    $this->quantity = $_quantity;
  }
}