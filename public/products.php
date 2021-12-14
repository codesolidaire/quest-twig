<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];
//echo $twig->render('products.html.twig', ['products' => $products]);

// appelle ton template products.html.twig en lui passant ton tableau $products
// via l’appel à la méthode render() de l'objet $twig.

// index: echo $twig->render('home.html.twig', ['name' => $name]);

echo $twig->render('products.html', ['products' => $products]);