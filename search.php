<?php

require("vendor/autoload.php");
include('includes/navigation.php');

//check if product_id exists in GET request parameter
if( isset($_GET['keyword']) == false ){
  echo "keyword not defined";
  exit();
}


use aitsydney\ProductSearch;

$search = new ProductSearch();
$product_search = $search -> searchProducts( $_GET['keyword'] );

//get product name to use as page title
$page_title = "Search Result for " . $_GET['keyword'];

//Page View Section
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  // 'cache' => 'cache'
));

$template = $twig -> load('main.twig');
echo $template -> render( array(
  'view' => 'search',
  'page_title' => $page_title,
  'result' => $product_search,
  'navitems' => $nav_items
  )
);
?>