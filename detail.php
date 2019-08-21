<?php
require('vendor/autoload.php');

<<<<<<< HEAD
use aitsydney\Product;

//get the product id from request
if( isset( $_GET['product_id']) ){
    echo 'product id = ' . $_GET['product_id'];
}
=======
use aitsydney\Navigation;

$nav = new Navigation();
$nav_items = $nav -> getNavigation();

use aitsydney\ProductDetail;

//get the product id from url parameter
if( isset( $_GET['product_id'] ) == false ){
    echo "no parameter set";
    exit();
}

//create an instance of ProductDetail class
$pd = new ProductDetail();
$detail = $pd -> getProductDetail( $_GET['product_id'] );

//initialise twig template
$loader = new Twig_Loader_Filesystem('templates');

//create twig environment
$twig = new Twig_Environment($loader);

//load a twig template
$template = $twig -> load('detail.twig');

//pass values to twig
echo $template -> render([
    'navigation' => $nav_items,
    'detail' => $detail,
    'title' => $detail['product']['name']
]);
>>>>>>> 3f1de7356486353d4a633fc78e1b46310c10f041
?>