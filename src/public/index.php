<?php

require_once '../lib/bootstrap.php';


$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader, [
        'cache' => false
]);

try {
    echo $twig->render('index.html.twig');
} catch (Exception $e) {

}

