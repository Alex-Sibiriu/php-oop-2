<?php 

class Kennel extends Product {

  public $material;
  public $size;
  public $removable_roof;

  function __construct(string $_name, string $_img, string $_category, float $_price, string $_type, string $_material, string $_size, bool $_removable_roof) {
    
    parent::__construct($_name, $_img, $_category, $_price, $_type);

    $this->material = $_material;
    $this->size = $_size;
    $this->removable_roof = $_removable_roof;
  }
}