<?php
require("vendor/autoload.php");


use aitsydney\Account;
use aitsydney\SessionManager;

// start session
SessionManager::init();

// include navigation
include('includes/navigation.php');
// receive the POST request from register form when submitted, but not active when page loads normally
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
  //receive email address from form
  $email = $_POST['email'];
  //receive password from form
  $password = $_POST['password'];

  $acc = new Account();
 
}

//Page View Section
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  // 'cache' => 'cache'
));

$template = $twig -> load('main.twig');
echo $template -> render( array(
  'view' => 'login',
  'navitems' => $nav_items
  )
);
?>