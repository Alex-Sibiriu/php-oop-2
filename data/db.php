<?php 

require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Category.php';
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Kennel.php';
require_once __DIR__ . '/../Models/Toy.php';

// Lista di oggetti food per cani
$dog_foods = [
  new Food('Croccantini Gustosi', 'Croccantini ricchi di nutrienti per cani adulti', 'Cani', 12.99, 'cibo', 'crocchette', 'Manzo', '1kg'),
  new Food('Scatolette al Pollo', 'Scatolette umide al pollo per cani di tutte le taglie', 'Cani', 9.99, 'cibo', 'umido', 'Pollo', '400g'),
  new Food('Snack Dental Fresh', 'Snack dentali per la pulizia dei denti dei cani', 'Cani', 5.99, 'snack', 'dentali', 'Menta', '200g'),
  new Food('Cibo Balance per Cuccioli', 'Cibo bilanciato per cani cuccioli in fase di crescita', 'Cani', 14.99, 'cibo', 'crocchette', 'Tacchino', '800g'),
  new Food('Cibo Dietetico Light', 'Cibo dietetico a basso contenuto calorico per cani in sovrappeso', 'Cani', 11.99, 'cibo', 'crocchette', 'Pollo', '500g'),
];

// Lista di oggetti toys per cani
$dog_toys = [
  new Toy('Palla Rimbalzante Resistente', 'Palla robusta per il gioco attivo con il tuo cane', 'Cani', 15.99, 'giochi', 'Gomma Naturale', 'Tutte le razze', 'Palla'),
  new Toy('Giocattolo a Forma di Osso', 'Osso in gomma resistente per il gioco dei cani', 'Cani', 8.99, 'giochi', 'Gomma Naturale', 'Tutte le razze', 'Osso'),
  new Toy('Peluche Orsetto Morbidoso', 'Peluche adorabile per cani che amano accoccolarsi', 'Cani', 12.99, 'giochi', 'Peluche', 'Taglia Piccola', 'Orsetto'),
  new Toy('Frisbee Volante Resistente', 'Frisbee in gomma resistente per il gioco all\'aperto', 'Cani', 11.99, 'giochi', 'Gomma Naturale', 'Taglia Media', 'Frisbee'),
  new Toy('Giocattolo Interattivo a Molla', 'Giocattolo con molla per il divertimento autonomo del tuo cane', 'Cani', 9.99, 'giochi', 'Plastica', 'Tutte le razze', 'Molla'),
];

// Lista di oggetti kennel per cani
$dog_kennels = [
  new Kennel('Cuccia in Plastica Robusta', 'Cuccia resistente alle intemperie per cani di medie dimensioni', 'Cani', 49.99, 'cuccia', 'Plastica', '80 x 60 x 70 cm', true),
  new Kennel('Cuccia Morbida e Calda', 'Cuccia imbottita e confortevole per il riposo dei cani', 'Cani', 59.99, 'cuccia', 'Tessuto', '90 x 70 x 80 cm', false),
  new Kennel('Letto Ortopedico Memory Foam', 'Letto ortopedico con memoria per cani anziani o con problemi articolari', 'Cani', 79.99, 'letto', 'Memory Foam', '100 x 80 x 10 cm', true),
  new Kennel('Cuccia Igloo Termica', 'Cuccia a forma di igloo con isolamento termico per cani che vivono all\'aperto', 'Cani', 99.99, 'cuccia', 'Plastica', '120 x 100 x 110 cm', true),
  new Kennel('Cuscino Imbottito Rimovibile', 'Cuscino imbottito e rimovibile per la cuccia del tuo cane', 'Cani', 29.99, 'cuscino', 'Tessuto', '70 x 50 cm', true)
];

// Lista di oggetti food per gatti
$cat_foods = [
  new Food('Croccantini alla Trota e Patate', 'Crocchette con trota e patate per gatti dal palato raffinato', 'Gatti', 14.99, 'cibo', 'crocchette', 'Trota', '1kg'),
  new Food('Cibo Umido con Salmone e Verdure', 'Cibo umido con salmone e verdure per una dieta equilibrata', 'Gatti', 11.99, 'cibo', 'umido', 'Salmone', '400g'),
  new Food('Bastoncini Snack al Pollo', 'Bastoncini snack al pollo per gatti golosi', 'Gatti', 6.99, 'snack', 'bastoncini', 'Pollo', '200g'),
  new Food('Crocchette Senza Cereali', 'Crocchette senza cereali per gatti con pelli sensibili', 'Gatti', 16.99, 'cibo', 'crocchette', 'Anatra', '800g'),
  new Food('Paté alla Turchia con Carote', 'Paté gustoso alla turchia con carote per gatti gourmet', 'Gatti', 8.99, 'cibo', 'paté', 'Turchia', '300g')
];

// Lista di oggetti toys per gatti
$cat_toys = [
  new Toy('Giocattolo a Piume', 'Giocattolo interattivo con piume per stimolare l\'istinto di caccia del tuo gatto', 'Gatti', 5.99, 'giochi', 'Piume', 'Tutte le razze', 'Piume'),
  new Toy('Giostrina Rotante con Palla', 'Giostrina con palla rotante per l\'intrattenimento dei gatti', 'Gatti', 8.99, 'giochi', 'Plastica', 'Tutte le razze', 'Giostrina'),
  new Toy('Tunnel Pieghevole', 'Tunnel pieghevole per il gioco e l\'esplorazione dei gatti', 'Gatti', 12.99, 'giochi', 'Tessuto', 'Tutte le razze', 'Tunnel'),
  new Toy('Topo Peluche con Catnip', 'Topo di peluche imbottito con catnip per il gioco dei gatti', 'Gatti', 6.99, 'giochi', 'Peluche', 'Tutte le razze', 'Topo'),
  new Toy('Giocattolo a Sfera con Sonagli', 'Giocattolo a sfera con sonagli per il divertimento del tuo gatto', 'Gatti', 7.99, 'giochi', 'Plastica', 'Tutte le razze', 'Sfera')
];

// Lista di oggetti kennel per gatti
$cat_kennels = [
  new Kennel('Cuccia Morbida con Cuscino', 'Cuccia imbottita con cuscino rimovibile per il comfort dei gatti', 'Gatti', 29.99, 'cuccia', 'Tessuto', '50 x 40 x 30 cm', false),
  new Kennel('Casetta in Cartone Riciclato', 'Casetta ecologica in cartone riciclato per gatti ecologici', 'Gatti', 19.99, 'cuccia', 'Cartone', '45 x 35 x 25 cm', true),
  new Kennel('Cuccia Sospesa a Gattaiola', 'Cuccia sospesa con gattaiola per gatti avventurosi', 'Gatti', 39.99, 'cuccia', 'Tessuto', '60 x 50 x 40 cm', false),
  new Kennel('Cuccia Termica Isolante', 'Cuccia isolante con rivestimento termico per gatti che vivono all\'aperto', 'Gatti', 49.99, 'cuccia', 'Tessuto', '70 x 60 x 50 cm', true),
  new Kennel('Casetta in Legno Massello', 'Casetta in legno massello di alta qualità per gatti dallo spirito selvaggio', 'Gatti', 69.99, 'cuccia', 'Legno', '55 x 45 x 40 cm', true)
];

$dog_category = new Category('Dogs');
$cat_category = new Category('Cats');

foreach ($dog_foods as $food) {
  $dog_category->addProduct('food', $food);
}

foreach ($dog_toys as $toy) {
  $dog_category->addProduct('toys', $toy);
}

foreach ($dog_kennels as $kennel) {
  $dog_category->addProduct('kennels', $kennel);
}

foreach ($cat_foods as $food) {
  $cat_category->addProduct('food', $food);
}

foreach ($cat_toys as $toy) {
  $cat_category->addProduct('toys', $toy);
}

foreach ($cat_kennels as $kennel) {
  $cat_category->addProduct('kennels', $kennel);
}