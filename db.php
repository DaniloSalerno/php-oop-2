<?php

$categories = [

    $dog_categories = new Categories('cane'),
    $cat_categories = new Categories('gatto'),

];

$products = [
    new Products('Croccantini', 9.99, $categories[0], 0, 'https://picsum.photos/200/300?random=1'),
    new Products('Bocconi con Manzo', 19.99, $categories[0], 0, 'https://picsum.photos/200/300?random=2'),
    new Products('Collare', 10.99, $categories[0], 3, 'https://picsum.photos/200/300?random=3'),
    new Products('Tiragraffi', 19.99, $categories[1], 1, 'https://picsum.photos/200/300?random=4'),
    new Products('Cuccia', 49.99, $categories[0], 2, 'https://picsum.photos/200/300?random=5'),
    new Products('Pesce in scatola', 9.99, $categories[1], 0, 'https://picsum.photos/200/300?random=6'),
    new Products('Osso giocattolo', 15.99, $categories[0], 1, 'https://picsum.photos/200/300?random=7')
];
