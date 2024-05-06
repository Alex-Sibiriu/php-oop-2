<?php 

require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Category.php';
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Kennel.php';
require_once __DIR__ . '/../Models/Toy.php';

$dog_category = new Category('Dogs', 'fa-dog');
$cat_category = new Category('Cats', 'fa-cat');

// Lista di oggetti food per cani
$dog_category->addProduct(new Food('https://www.bauzaar.it/media/catalog/product/p/o/pollo_anatra_12_kg.jpg?width=700&height=700&store=default&image-type=image', 'Croccantini Gustosi', 'Croccantini ricchi di nutrienti per cani adulti', 'Cani', 12.99, 'cibo', 'crocchette', 'Manzo', '1kg'));

// Scateno l'errore
try {
  $dog_category->addProduct(new Food('https://www.bauzaar.it/media/catalog/product/p/o/pollo_anatra_12_kg.jpg?width=700&height=700&store=default&image-type=image', 'Croccantini Gustosi', 'Croccantini ricchi di nutrienti per cani adulti', 'Cani', 12.99, 'cibo', 'crocchette', 'Manzo', '1kg'));
} catch (Exception $e) {
  var_dump($e->getMessage());
}

$dog_category->addProduct(new Food('https://shop-cdn-m.mediazs.com/bilder/3/400/briantos_can_pate_400g_chicken_1000x1000_3.jpg', 'Scatolette al Pollo', 'Scatolette umide al pollo per cani di tutte le taglie', 'Cani', 9.99, 'cibo', 'umido', 'Pollo', '400g'));

$dog_category->addProduct(new Food('https://shop-cdn-m.mediazs.com/bilder/8/400/56957_pla_mars_pedigree_dentastix_fresh_small_hs_02_8.jpg', 'Snack Dental Fresh', 'Snack dentali per la pulizia dei denti dei cani', 'Cani', 5.99, 'snack', 'dentali', 'Menta', '200g'));

$dog_category->addProduct(new Food('https://shop-cdn-m.mediazs.com/bilder/0/400/73063_pla_affinity_advance_puppy_snack_0.jpg', 'Cibo Balance per Cuccioli', 'Cibo bilanciato per cani cuccioli in fase di crescita', 'Cani', 14.99, 'cibo', 'crocchette', 'Tacchino', '800g'));

$dog_category->addProduct(new Food('https://shop-cdn-m.mediazs.com/bilder/1/400/rocco_nf_dietcare_400g_weight_control_beef_1000x1000_1__1.jpg', 'Cibo Dietetico Light', 'Cibo dietetico a basso contenuto calorico per cani in sovrappeso', 'Cani', 11.99, 'cibo', 'crocchette', 'Pollo', '500g'));

// Lista di oggetti toys per cani
$dog_category->addProduct(new Toy('https://m.media-amazon.com/images/I/51PCPRtS0QS._AC_UF894,1000_QL80_.jpg', 'Palla Rimbalzante Resistente', 'Palla robusta per il gioco attivo con il tuo cane', 'Cani', 15.99, 'giochi', 'Gomma Naturale', 'Tutte le razze', 'Palla'));

$dog_category->addProduct(new Toy('https://m.media-amazon.com/images/I/61jmIvnYU4L.jpg', 'Giocattolo a Forma di Osso', 'Osso in gomma resistente per il gioco dei cani', 'Cani', 8.99, 'giochi', 'Gomma Naturale', 'Tutte le razze', 'Osso'));


$peluche = new Toy('https://www.animalhouseitalia.it/16570-thickbox_default/kong-wild-knotz-bear-sm-orsetto-in-peluche-con-corda-per-cane-nkr3.jpg', 'Peluche Orsetto Morbidoso', 'Peluche adorabile per cani che amano accoccolarsi', 'Cani', 12.99, 'giochi', 'Peluche', 'Taglia Piccola', 'Orsetto');


$dog_category->addProduct($peluche);

$dog_category->addProduct(new Toy('https://m.media-amazon.com/images/I/61xtssAIuQL.jpg', 'Frisbee Volante Resistente', 'Frisbee in gomma resistente per il gioco all\'aperto', 'Cani', 11.99, 'giochi', 'Gomma Naturale', 'Taglia Media', 'Frisbee'));

$dog_category->addProduct(new Toy('https://m.media-amazon.com/images/I/71DJHHSBtzL._AC_UF894,1000_QL80_DpWeblab_.jpg', 'Giocattolo Interattivo a Molla', 'Giocattolo con molla per il divertimento autonomo del tuo cane', 'Cani', 9.99, 'giochi', 'Plastica', 'Tutte le razze', 'Molla'));

// Lista di oggetti kennel per cani
$dog_category->addProduct(new Kennel('https://m.media-amazon.com/images/I/51cX9AvHxoL._AC_UF894,1000_QL80_.jpg', 'Cuccia in Plastica Robusta', 'Cuccia resistente alle intemperie per cani di medie dimensioni', 'Cani', 49.99, 'cuccia', 'Plastica', '80 x 60 x 70 cm', true));

$dog_category->addProduct(new Kennel('https://m.media-amazon.com/images/I/61zOuspyMuL._AC_UF1000,1000_QL80_.jpg', 'Cuccia Morbida e Calda', 'Cuccia imbottita e confortevole per il riposo dei cani', 'Cani', 59.99, 'cuccia', 'Tessuto', '90 x 70 x 80 cm', false));

$dog_category->addProduct(new Kennel('https://m.media-amazon.com/images/I/91bopT-RwjL.jpg', 'Letto Ortopedico Memory Foam', 'Letto ortopedico con memoria per cani anziani o con problemi articolari', 'Cani', 79.99, 'letto', 'Memory Foam', '100 x 80 x 10 cm', true));

$dog_category->addProduct(new Kennel('https://m.media-amazon.com/images/I/51lYztHWRZL._AC_UF1000,1000_QL80_.jpg', 'Cuccia Igloo Termica', 'Cuccia a forma di igloo con isolamento termico per cani che vivono all\'aperto', 'Cani', 99.99, 'cuccia', 'Plastica', '120 x 100 x 110 cm', true));

$dog_category->addProduct(new Kennel('https://m.media-amazon.com/images/I/719968E9TjL.jpg', 'Cuscino Imbottito Rimovibile', 'Cuscino imbottito e rimovibile per la cuccia del tuo cane', 'Cani', 29.99, 'cuscino', 'Tessuto', '70 x 50 cm', true));

// Lista di oggetti food per gatti
$cat_category->addProduct(new Food('https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dw534c87ea/140849.jpg?sw=800&sh=800', 'Croccantini alla Trota e Patate', 'Crocchette con trota e patate per gatti dal palato raffinato', 'Gatti', 14.99, 'cibo', 'crocchette', 'Trota', '1.5kg'));

$cat_category->addProduct(new Food('https://m.media-amazon.com/images/I/81uEKXi5HyL._AC_UF894,1000_QL80_.jpg', 'Cibo Umido con Salmone e Verdure', 'Cibo umido con salmone e verdure per una dieta equilibrata', 'Gatti', 11.99, 'cibo', 'umido', 'Salmone', '400g'));

$cat_category->addProduct(new Food('https://www.naturepetshop.it/wp-content/uploads/sparrow_cannacat_relax_stick_pollo_per_gatti.jpg', 'Bastoncini Snack al Pollo', 'Bastoncini snack con l\'80% di pollo per gatti golosi', 'Gatti', 6.99, 'snack', 'bastoncini', 'Pollo', '200g'));

$cat_category->addProduct(new Food('https://m.media-amazon.com/images/I/61at57AdCsL._AC_UF894,1000_QL80_.jpg', 'Crocchette Senza Cereali', 'Crocchette senza cereali per gatti con pelli sensibili', 'Gatti', 16.99, 'cibo', 'crocchette', 'Anatra', '800g'));

$cat_category->addProduct(new Food('https://media.nihaogroup.it/catalog/product/cache/636f7ea024468f3ece572a519f29d06f/8/0/8007520014533.jpg', 'Paté al Manzo con Carote', 'Paté gustoso al manzo con carote per gatti gourmet', 'Gatti', 8.99, 'cibo', 'paté', 'Manzo', '300g'));

// Lista di oggetti toys per gatti
$cat_category->addProduct(new Toy('https://m.media-amazon.com/images/I/61jQoGJQGIL.jpg', 'Giocattolo a Piume', 'Giocattolo interattivo con piume per stimolare l\'istinto di caccia del tuo gatto', 'Gatti', 5.99, 'giochi', 'Piume', 'Tutte le razze', 'Piume'));

$cat_category->addProduct(new Toy('https://www.tradeshopitalia.com/36537-large_default/gioco-per-gatti-interattivo-torre-circolare-con-sfere-palline-rotanti-gatto.jpg', 'Giostrina Rotante con Palla', 'Giostrina con palla rotante per l\'intrattenimento dei gatti', 'Gatti', 8.99, 'giochi', 'Plastica', 'Tutte le razze', 'Giostrina'));

$cat_category->addProduct(new Toy('https://m.media-amazon.com/images/I/51kQwHAXFDL._AC_UF894,1000_QL80_.jpg', 'Tunnel Pieghevole', 'Tunnel pieghevole per il gioco e l\'esplorazione dei gatti', 'Gatti', 12.99, 'giochi', 'Tessuto', 'Tutte le razze', 'Tunnel'));

$cat_category->addProduct(new Toy('https://ae01.alicdn.com/kf/S874c9362d92845d3a9839add89b7ed6fh/Pet-Toy-Catnip-topi-gatti-giocattoli-Fun-peluche-topo-gatto-giocattolo-per-gattino-colorato-carino-peluche.jpg', 'Topo Peluche con Catnip', 'Topo di peluche imbottito con catnip per il gioco dei gatti', 'Gatti', 6.99, 'giochi', 'Peluche', 'Tutte le razze', 'Topo'));

$cat_category->addProduct(new Toy('https://ae01.alicdn.com/kf/HTB17CHpcmSD3KVjSZFKq6z10VXa7.jpg_640x640Q90.jpg_.webp', 'Giocattolo a Sfera con Sonagli', 'Giocattolo a sfera con sonagli per il divertimento del tuo gatto', 'Gatti', 7.99, 'giochi', 'Plastica', 'Tutte le razze', 'Sfera'));

// Lista di oggetti kennel per gatti
$cat_category->addProduct(new Kennel('https://m.media-amazon.com/images/I/61i1BzfjBiL._AC_UF894,1000_QL80_.jpg', 'Cuccia Morbida con Cuscino', 'Cuccia imbottita con cuscino rimovibile per il comfort dei gatti', 'Gatti', 29.99, 'cuccia', 'Tessuto', '50 x 40 x 30 cm', false));

$cat_category->addProduct(new Kennel('https://m.media-amazon.com/images/I/61a6p1fsOeL.jpg', 'Casetta in Cartone Riciclato', 'Casetta ecologica in cartone riciclato per gatti ecologici', 'Gatti', 19.99, 'cuccia', 'Cartone', '45 x 35 x 25 cm', true));

$cat_category->addProduct(new Kennel('https://ae01.alicdn.com/kf/S97b5a30459d549f09bbe862f09729f42a/Amaca-per-gatti-appesa-finestra-per-letto-per-gatti-cuccia-per-gatti-cani-di-piccola-taglia.jpg', 'Cuccia Sospesa a Gattaiola', 'Cuccia sospesa con gattaiola per gatti avventurosi', 'Gatti', 39.99, 'cuccia', 'Tessuto', '60 x 50 x 40 cm', false));

$cat_category->addProduct(new Kennel('https://m.media-amazon.com/images/I/811CB0Oln8L._AC_UF894,1000_QL80_.jpg', 'Cuccia Termica Isolante', 'Cuccia isolante con rivestimento termico per gatti che vivono all\'aperto', 'Gatti', 49.99, 'cuccia', 'Tessuto', '70 x 60 x 50 cm', true));

$cat_category->addProduct(new Kennel('https://cfw42.rabbitloader.xyz/eyJjIjp0cnVlLCJoIjoid3d3LmNvbWVudW92by5zaG9wIiwidiI6MjE5MTEwMjM0MiwiaSI6IjQyNDk3YjVjLWU1NWUtNGUyYy0zM2MxLTgxMTcwNjhkZjUwMCJ9/wp-content/uploads/2023/07/AvI90f1800cad5b2c-1536x1536.jpg', 'Casetta in Legno Massello', 'Casetta in legno massello di alta qualità per gatti dallo spirito selvaggio', 'Gatti', 69.99, 'cuccia', 'Legno', '55 x 45 x 40 cm', true));

$dog_foods = array_filter($dog_category->products, fn ($product) => get_class($product) === 'Food');
$dog_toys = array_filter($dog_category->products, fn ($product) => get_class($product) === 'Toy');
$dog_kennels = array_filter($dog_category->products, fn ($product) => get_class($product) === 'Kennel');

$cat_foods = array_filter($cat_category->products, fn ($product) => get_class($product) === 'Food');
$cat_toys = array_filter($cat_category->products, fn ($product) => get_class($product) === 'Toy');
$cat_kennels = array_filter($cat_category->products, fn ($product) => get_class($product) === 'Kennel');

// Utilizzo il trait 'color'
$peluche->color = 'Marrone';