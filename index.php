<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

L'e-commerce vende prodotti per animali.

I prodotti sono categorizzati, le categorie sono Cani o Gatti.

I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php

$debug = true;
if ($debug == true) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}

define('ROOT', __DIR__);

define('DS', DIRECTORY_SEPARATOR);

require_once ROOT . DS . 'models' . DS . 'categories.php';

require_once ROOT . DS . 'models' . DS . 'products.php';

require_once ROOT . DS . 'models' . DS . 'food.php';

require_once ROOT . DS . 'models' . DS . 'toy.php';

require_once ROOT . DS . 'models' . DS . 'kennel.php';

require_once ROOT . DS . 'db.php';

require_once ROOT . DS . 'partials' . DS . 'head.php';

require_once ROOT . DS . 'partials' . DS . 'main.php';

require_once ROOT . DS . 'partials' . DS . 'footer.php';

?>