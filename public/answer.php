<?php
require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('../src/View');
$twig = new \Twig\Environment($loader);

echo $twig->render('answer.html.twig');

