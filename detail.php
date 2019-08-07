<?php

require("vendor/autoload.php");
include('includes/navigation.php');

//check if product_id exists in GET request parameter
if( isset($_GET['product_id']) == false ){
  echo "product id not defined";
  exit();
}
elseif( filter_var( $_GET['product_id'], FILTER_VALIDATE_INT ) == false ){
  echo "invalid parameter given";
  exit();
}

use aitsydney\ProductDetail;

$prod = new ProductDetail();
$product_detail = $prod -> getProductDetail( $_GET['product_id'] );

//get product name to use as page title
$page_title = $product_detail['product']['name'];

//Page View Section
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  // 'cache' => 'cache'
));

$template = $twig -> load('main.twig');
echo $template -> render( array(
  'view' => 'detail',
  'page_title' => $page_title,
  'detail' => $product_detail,
  'navitems' => $nav_items
  )
);
?>