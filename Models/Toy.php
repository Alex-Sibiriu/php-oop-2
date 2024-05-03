<?php

class Toy extends Product {

  public $material;
  public $recommended_breed;
  public $toy_type;

  function __construct(string $_name, string $_description, string $_category, float $_price, string $_type, string $_material, string $_recommended_breed, string $_toy_type) {

    parent::__construct($_name, $_description, $_category, $_price, $_type);

    $this->material = $_material;
    $this->recommended_breed = $_recommended_breed;
    $this->toy_type = $_toy_type;
  }
}