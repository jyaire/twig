<?php
require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('../src/View');
$twig = new \Twig\Environment($loader);

$products = ['lait',
            'oeufs',
            'farine',
            'sucre',
            'bière',
            'nutella',
            'cidre'];

echo $twig->render('index.html.twig', array('products' => $products));

