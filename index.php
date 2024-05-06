<?php 

  require_once __DIR__ . '/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 2</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' integrity='sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==' crossorigin='anonymous'/>

  <!-- CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">
  
</head>
<body>

  <header class="bg-light-subtle text-secondary">
    <div class="container py-2">
      <i class="fa-solid fa-paw fs-1"></i>
      <h1 class="fw-bold d-inline-block ps-2">Pet Shop</h1>
    </div>
  </header>

  <div class="container mt-5 text-center py-3 text-secondary">
    <h2 class="fw-bold fs-1">I Nostri Prodotti</h2>
    <h3 class="fw-bold fs-2 py-2">Pet Food</h3>
    <div class="row row-cols-3">

      <?php foreach ($dog_foods as $food): ?>
      <div class="col mb-2">
        <div class="card bg-light-subtle text-secondary p-2 h-100 d-flex flex-column justify-content-between align-items-center">
          <img class="w-100 mb-3 mt-auto" src="<?php echo $food->img ?>" alt="<?php echo $food->name ?>">
          <h4 class="mt-auto"><?php echo $food->name ?></h4>
          <p><strong>Descrizione: </strong><?php echo $food->description ?></p>
          <p><strong>Tipo: </strong><?php echo $food->typology ?></p>
          <p><strong>Gusto: </strong><?php echo $food->taste ?></p>
          <p><strong>Quantità: </strong><?php echo $food->quantity ?></p>
          <p class="pt-3"><strong>Prezzo: </strong>&euro;<?php echo $food->price ?></p>
          <p class="align-self-end m-0 pe-1 text-danger"><i class="fa-solid <?php echo $dog_category->icon ?>"></i></p>
        </div>
      </div>
      <?php endforeach ?>

      <?php foreach ($cat_foods as $food): ?>
      <div class="col mb-2">
        <div class="card bg-light-subtle text-secondary p-2 h-100 d-flex flex-column justify-content-between align-items-center">
          <img class="w-100 mb-3 mt-auto" src="<?php echo $food->img ?>" alt="<?php echo $food->name ?>">
          <h4 class="mt-auto"><?php echo $food->name ?></h4>
          <p><strong>Descrizione: </strong><?php echo $food->description ?></p>
          <p><strong>Tipo: </strong><?php echo $food->typology ?></p>
          <p><strong>Gusto: </strong><?php echo $food->taste ?></p>
          <p><strong>Quantità: </strong><?php echo $food->quantity ?></p>
          <p><strong>Prezzo: </strong>&euro;<?php echo $food->price ?></p>
          <p class="align-self-end m-0 pe-1 text-warning"><i class="fa-solid <?php echo $cat_category->icon ?>"></i></p>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>

  <div class="container mt-5 text-center py-3">
    <h3 class="fw-bold fs-2 text-secondary py-2">Le Nostre Cucce</h3>
    <div class="row row-cols-3">

      <?php foreach ($dog_kennels as $kennel): ?>
        <div class="col mb-2">
          <div class="card bg-light-subtle text-secondary p-2 h-100 d-flex flex-column justify-content-between align-items-center">
            <img class="w-100 mb-3 mt-auto" src="<?php echo $kennel->img ?>" alt="<?php echo $kennel->name ?>">
            <h4 class="mt-auto"><?php echo $kennel->name ?></h4>
            <p><strong>Descrizione: </strong><?php echo $kennel->description ?></p>
            <p><strong>Materiale: </strong><?php echo $kennel->material ?></p>
            <p><strong>Misure: </strong><?php echo $kennel->size ?></p>
            <p><strong>Tetto removibile: </strong><?php echo $kennel->removable_roof ? 'Si' : 'No' ?></p>
            <p><strong>Prezzo: </strong>&euro;<?php echo $kennel->price ?></p>
            <p class="align-self-end m-0 pe-1 text-danger"><i class="fa-solid <?php echo $dog_category->icon ?>"></i></p>
          </div>
        </div>
      <?php endforeach ?>

      <?php foreach ($cat_kennels as $kennel): ?>
        <div class="col mb-2">
          <div class="card bg-light-subtle text-secondary p-2 h-100 d-flex flex-column justify-content-between align-items-center">
            <img class="w-100 mb-3 mt-auto" src="<?php echo $kennel->img ?>" alt="<?php echo $kennel->name ?>">
            <h4 class="mt-auto"><?php echo $kennel->name ?></h4>
            <p><strong>Descrizione: </strong><?php echo $kennel->description ?></p>
            <p><strong>Materiale: </strong><?php echo $kennel->material ?></p>
            <p><strong>Misure: </strong><?php echo $kennel->size ?></p>
            <p><strong>Tetto removibile: </strong><?php echo $kennel->removable_roof ? 'Si' : 'No' ?></p>
            <p><strong>Prezzo: </strong>&euro;<?php echo $kennel->price ?></p>
            <p class="align-self-end m-0 pe-1 text-warning"><i class="fa-solid <?php echo $cat_category->icon ?>"></i></p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>

  <div class="container mt-5 text-center py-3">
    <h3 class="fw-bold fs-2 text-secondary py-2">I Nostri Giochi</h3>
    <div class="row row-cols-3">

      <?php foreach ($dog_toys as $toy): ?>
        <div class="col mb-2">
          <div class="card bg-light-subtle text-secondary p-2 h-100 d-flex flex-column justify-content-between align-items-center">
            <img class="w-100 mb-3 mt-auto" src="<?php echo $toy->img ?>" alt="<?php echo $toy->name ?>">
            <h4 class="mt-auto"><?php echo $toy->name ?></h4>
            <p><strong>Descrizione: </strong><?php echo $toy->description ?></p>
            <p><strong>Materiale: </strong><?php echo $toy->material ?></p>
            <p><strong>Adatto a: </strong><?php echo $toy->recommended_breed ?></p>
            <p><strong>Tipologia: </strong><?php echo $toy->toy_type ?></p>

            <?php if ($toy->color): ?>
              <p><strong>Colore: </strong><?php echo $toy->color ?></p>
            <?php endif ?>
            
            <p><strong>Prezzo: </strong>&euro;<?php echo $toy->price ?></p>
            <p class="align-self-end m-0 pe-1 text-danger"><i class="fa-solid <?php echo $dog_category->icon ?>"></i></p>
          </div>
        </div>
      <?php endforeach ?>

      <?php foreach ($cat_toys as $toy): ?>
        <div class="col mb-2">
          <div class="card bg-light-subtle text-secondary p-2 h-100 d-flex flex-column justify-content-between align-items-center">
            <img class="w-100 mb-3 mt-auto" src="<?php echo $toy->img ?>" alt="<?php echo $toy->name ?>">
            <h4 class="mt-auto"><?php echo $toy->name ?></h4>
            <p><strong>Descrizione: </strong><?php echo $toy->description ?></p>
            <p><strong>Materiale: </strong><?php echo $toy->material ?></p>
            <p><strong>Adatto a: </strong><?php echo $toy->recommended_breed ?></p>
            <p><strong>Tipologia: </strong><?php echo $toy->toy_type ?></p>
            <p><strong>Prezzo: </strong>&euro;<?php echo $toy->price ?></p>
            <p class="align-self-end m-0 pe-1 text-warning"><i class="fa-solid <?php echo $cat_category->icon ?>"></i></p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  
</body>
</html>