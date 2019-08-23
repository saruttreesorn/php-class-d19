<?php

require("vendor/autoload.php");
include('includes/navigation.php');

use aitsydney\Product;

$prod = new Product();
$products = $prod -> getProducts();

use aitsydney\Category;

$cat = new Category();
$categories = $cat -> getCategories();



//Page View Section
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  // 'cache' => 'cache'
));

$template = $twig -> load('main.twig');
echo $template -> render( array(
  'view' => 'home',
  'categories' => $categories,
  'products' => $products,
  'navitems' => $nav_items
  )
);
?>