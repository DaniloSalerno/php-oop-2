<?php

$food_list = [

    new Food('Crocchette', 3.99, 'https://picsum.photos/200/300?random=1', new Categories('Cane'), '2023/11/22', 0.500),
    new Food('Bocconi con Manzo', 5.99, 'https://picsum.photos/200/300?random=2', new Categories('Gatto'), '2023/11/23', 0.300),
    new Food('Croccantini', 7.50, 'https://picsum.photos/200/300?random=3', new Categories('Cane'), '2023/12/22', 0.250),
    new Food('Cibo in scatola', 11.20, 'https://picsum.photos/200/300?random=4', new Categories('Gatto'), '2023/11/24', 0.450),
    new Food('Lorem ipsum', 3.50, 'https://picsum.photos/200/300?random=5', new Categories('Cane'), '2023/12/12', 0.330),
    new Food('Lorem Cibo', 9.99, 'https://picsum.photos/200/300?random=6', new Categories('Gatto'), '2023/11/10', 0.700),
    new Food('Crocchette Lorem', 1.99, 'https://picsum.photos/200/300?random=7', new Categories('Cane'), '2023/12/19', 0.200),
    new Food('Croccantini Lorem', 4.49, 'https://picsum.photos/200/300?random=8', new Categories('Gatto'), '2023/11/30', 0.120),
    new Food('Manzo in scatola', 8.99, 'https://picsum.photos/200/300?random=9', new Categories('Cane'), '2023/12/24', 0.100),
    new Food('Ipsum Lorem', 19.99, 'https://picsum.photos/200/300?random=10', new Categories('Gatto'), '2023/12/25', 0.190),
    new Food('Croccantini', 10.49, 'https://picsum.photos/200/300?random=11', new Categories('Cane'), '2023/11/29', 0.250),
    new Food('Lorem', 99.99, 'https://picsum.photos/200/300?random=12', new Categories('Gatto'), '2023/12/31', 0.900),

];


$toy_list = [
    new Toy('Palla Lorem', 5.49, 'https://picsum.photos/200/300?random=13', new Categories('Gatto'), 'Yellow', 0.100),
    new Toy('Osso Lorem', 6.99, 'https://picsum.photos/200/300?random=14', new Categories('Cane'), 'White', 0.200),
    new Toy('Pupazzo Lorem', 7.99, 'https://picsum.photos/200/300?random=15', new Categories('Gatto'), 'Black', 0.300),
    new Toy('Gomitolo Lorem', 8.49, 'https://picsum.photos/200/300?random=16', new Categories('Gatto'), 'Grey', 0.400),
    new Toy('Giocattolo Lorem', 9.49, 'https://picsum.photos/200/300?random=17', new Categories('Cane'), 'Red', 0.150),
    new Toy('Palla ipsum', 1.99, 'https://picsum.photos/200/300?random=18', new Categories('Cane'), 'Green', 0.210),
    new Toy('Giocattolo Ipsum', 14.99, 'https://picsum.photos/200/300?random=19', new Categories('Gatto'), 'Cyan', 0.260),
    new Toy('Osso Giocattolo Ipsum', 16.49, 'https://picsum.photos/200/300?random=20', new Categories('Cane'), 'Brown', 0.500),
    new Toy('Pupazzo ipsum', 11.49, 'https://picsum.photos/200/300?random=21', new Categories('Gatto'), 'Blue', 0.400),
    new Toy('Ipsum Lorem', 10.99, 'https://picsum.photos/200/300?random=22', new Categories('Cane'), 'Orange', 0.350),
    new Toy('Lorem Ipsum', 11.99, 'https://picsum.photos/200/300?random=23', new Categories('Gatto'), 'Purple', 0.180),
    new Toy('Lorem', 31.99, 'https://picsum.photos/200/300?random=24', new Categories('Cane'), 'Pink', 0.700),


];

$kennel_list = [
    new Kennel('Cuccia', 9.99, 'https://picsum.photos/200/300?random=25', new Categories('Gatto'), 'Grey', 3500.900, 200.50, 100.90),
    new Kennel('Cuccia Lorem', 19.99, 'https://picsum.photos/200/300?random=26', new Categories('Cane'), 'Black', 3500.900, 200.50, 100.90),
    new Kennel('Cuccia Ipsum', 29.99, 'https://picsum.photos/200/300?random=27', new Categories('Gatto'), 'White', 3500.900, 200.50, 100.90),
    new Kennel('Cuccia Lorem Ipsum', 9.49, 'https://picsum.photos/200/300?random=28', new Categories('Cane'), 'Red', 3500.900, 200.50, 100.90),
    new Kennel('Cuccia Ipsum Lorem', 19.49, 'https://picsum.photos/200/300?random=29', new Categories('Gatto'), 'Green', 3500.900, 200.50, 100.90),
    new Kennel('Lorem Cuccia Ipsum', 29.49, 'https://picsum.photos/200/300?random=30', new Categories('Cane'), 'Blue', 3500.900, 200.50, 100.90),
    new Kennel('Ipsum Cuccia Lorem', 14.49, 'https://picsum.photos/200/300?random=31', new Categories('Gatto'), 'Yellow', 3500.900, 200.50, 100.90),
    new Kennel('Ipsum Lorem Cuccia', 13.99, 'https://picsum.photos/200/300?random=32', new Categories('Cane'), 'Red', 3500.900, 200.50, 100.90),
    new Kennel('Lorem Cuccia', 12.39, 'https://picsum.photos/200/300?random=33', new Categories('Gatto'), 'Pink', 3500.900, 200.50, 100.90),
    new Kennel('Lorem L0rem', 10.99, 'https://picsum.photos/200/300?random=34', new Categories('Cane'), 'Purple', 3500.900, 200.50, 100.90),
    new Kennel('Ipsum Ipsum', 11.99, 'https://picsum.photos/200/300?random=35', new Categories('Gatto'), 'Orange', 3500.900, 200.50, 100.90),
    new Kennel('Cuccia Lorem Lorem', 17.99, 'https://picsum.photos/200/300?random=36', new Categories('Cane'), 'Brown', 3500.900, 200.50, 100.90),

];


$products = [
    ...$food_list,
    ...$toy_list,
    ...$kennel_list
];
