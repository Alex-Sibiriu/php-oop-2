<?php 

  require_once __DIR__ . '/Models/Product.php';
  require_once __DIR__ . '/Models/Category.php';
  require_once __DIR__ . '/Models/Food.php';
  require_once __DIR__ . '/Models/Kennel.php';
  require_once __DIR__ . '/Models/Toy.php';

  $dog_category = new Category('Dogs');
  $cat_category = new Category('Cats');

  $new_dog_food = new Food('Croccantini Plus', 'asfdsfa', 'Cani', 8.99, 'cibo', 'crocchette', 'Manzo', '800g');
  $new_dog_toy = new Toy('Corda per cuccioli', 'asdfasf', 'Cani', 15.99, 'giochi', 'Gomma Naturale', 'Cuccioli', 'Corda');
  $second_dog_toy = new Toy('gallina fastidiosa', 'asdfasf', 'Cani', 5.99, 'giochi', 'Gomma Naturale', 'Cuccioli', 'Peluche');

  $new_cat_kennel = new Kennel('Cuccia con cuscino removibile', 'asdfasdf', 'Gatti', 19.99, 'cuccia', 'tessuto', '37,9 x 26,3 x 15 cm', false);

  $dog_category->addProduct($new_dog_food);
  $dog_category->addProduct($new_dog_toy);
  $dog_category->addProduct($second_dog_toy);
  $cat_category->addProduct($new_cat_kennel);

  var_dump($dog_category);
  var_dump($cat_category)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 2</title>
</head>
<body>


  
</body>
</html>