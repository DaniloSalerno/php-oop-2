<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

L'e-commerce vende prodotti per animali.

I prodotti sono categorizzati, le categorie sono Cani o Gatti.

I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php

$debug = true; // cambiate in true e false in base se volete o meno vedere gli errori
if ($debug == true) {
    ini_set('display_errors', 1); // imposta il file php.ini a mostrare gli errori
    error_reporting(E_ALL); // imposta il livello di errori da mostrare E_ALL tutti
}

define('ROOT', __DIR__);

define('DS', DIRECTORY_SEPARATOR);

require_once ROOT . DS . 'models' . DS . 'categories.php';

require_once ROOT . DS . 'models' . DS . 'products.php';

require_once ROOT . DS . 'partials' . DS . 'head.php';

require_once ROOT . DS . 'partials' . DS . 'main.php';

require_once ROOT . DS . 'partials' . DS . 'footer.php';

?>