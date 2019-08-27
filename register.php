<?php
require("vendor/autoload.php");
include('includes/navigation.php');

use aitsydney\Account;


// receive the POST request from register form when submitted, but not active when page loads normally
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
  //receive email address from form
  $email = $_POST['email'];
  //receive password from form
  $password = $_POST['password'];

  $acc = new Account();
  $register = $acc -> register( $email, $password );
  if( $register['success'] == false ){
    $errors = $register['errors'];
  }
}
if( isset($errors) == false){
  $errors = '';
}

//Page View Section
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  // 'cache' => 'cache'
));

$template = $twig -> load('main.twig');
echo $template -> render( array(
  'view' => 'register',
  'navitems' => $nav_items,
  'errors' => $errors
  )
);
?>