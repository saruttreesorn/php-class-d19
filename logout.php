<?php
require("vendor/autoload.php");

// start session
SessionManager::init();

// include navigation
include('includes/navigation.php');

use aitsydney\SessionManager;

if( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'logout'){
  //process logout
  SessionManager::empty('auth');
  //redirect
  header("location: index.php");
}

//Page View Section
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  // 'cache' => 'cache'
));

$template = $twig -> load('main.twig');
echo $template -> render( array(
  'view' => 'logout',
  'navitems' => $nav_items
  )
);

?>