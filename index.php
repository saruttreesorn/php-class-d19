<?php
require('vendor/autoload.php');

<<<<<<< HEAD
use aitsydney\Product;

//create an instance of Product class
$p = new Product();
$products = $p -> getProducts();

//print_r($products);
//create twig loader for templates
$loader = new Twig_Loader_Filesystem('templates');
//create twig environment and pass the loader
$twig = new Twig_Environment($loader);
//call a twig template
$template = $twig -> load('home.twig');
//output the template and pass the data

echo $template -> render( array(
    'products' => $products,
    'title' => 'Welcome to the shop'
) );
=======
//test for navigation after auth
//session_start();
// $_SESSION['auth'] = true;
// session_destroy();

use aitsydney\Navigation;

$nav = new Navigation();
$nav_items = $nav -> getNavigation();

use aitsydney\Product;

$products = new Product();
$products_result = $products -> getProducts();

//create twig loader
//$loader = new \Twig\Loader\FilesystemLoader('templates');
$loader = new Twig_Loader_Filesystem('templates');

//create twig environment
$twig = new Twig_Environment($loader);

//load a twig template
$template = $twig -> load('home.twig');

//pass values to twig
echo $template -> render([
    'navigation' => $nav_items,
    'products' => $products_result,
    'title' => 'Hello shop'
]);
>>>>>>> 3f1de7356486353d4a633fc78e1b46310c10f041
?>